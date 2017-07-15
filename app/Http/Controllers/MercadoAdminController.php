<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mercado;
use Carbon\Carbon; 
use Image;
use Storage;
use Purifier;
use Session;
use App\Mercadocategory;
use App\Producto;
use App\User;

class MercadoAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mercados = Mercado::where('visible', 1)->orderBy('id','desc')->paginate(7);
        return view('admin.mercados.index')
            ->withMercados($mercados);
    }

    public function pendientes()
    {
        $mercados = Mercado::where('visible', 0)->orderBy('id','desc')->paginate(7);
        return view('admin.mercados.index')
            ->withMercados($mercados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Mercadocategory::all();
        $productos = Producto::all();
        $users = User::all();

        return view('admin.mercados.create')
            ->withCategories($categories)
            ->withProductos($productos)
            ->withUsers($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'mercado'         => 'required|max:255',
                'domicilio'       => 'required',
                'descripcion'     => 'max:4000',
                'logo'            => 'mimes:jpeg,jpg,png,gif|max:2000',
                'image'           => 'mimes:jpeg,jpg,png,gif|max:2000'

        ));

        $mercado = New Mercado;
        $mercado->mercado = $request->mercado;
        $mercado->domicilio = $request->domicilio;
        $mercado->url_web = $request->url_web;
        $mercado->url_facebook = $request->url_facebook;
        $mercado->categoria = $request->categoria;
        $mercado->mercadocategory_id = $request->mercadocategory_id;
        $mercado->latitud = substr($request->latitud, 0, 9);
        $mercado->longitud = substr($request->longitud, 0, 9);
        $mercado->telefono = $request->telefono;
        $mercado->email = $request->email;
        $mercado->horarios = $request->horarios;
        $mercado->localidad = $request->localidad;
        $mercado->provincia = $request->provincia;

        $mercado->descripcion = Purifier::clean($request->descripcion);

        $mercado->url_youtube = $request->video;

        if($request->visible === 'on'){
            $mercado->visible = 1;
        }else {
            $mercado->visible = 0;
        }

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time() .'logo'. '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' . $filename);

            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            $mercado->logo = $filename;
        }
        else{
            $mercado->logo = " ";   
        }

        if($request->hasFile('imagen')){
            $image = $request->file('imagen');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' . $filename);

            Image::make($image)->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            $mercado->imagen = $filename;
        }
        else{
            $mercado->imagen = " ";   
        }

        function YoutubeID($url)
           {
                if(strlen($url) > 11)
                {
                    if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
                    {
                        return $match[1];
                    }
                    else
                        return false;
                }

                return $url;
        }
        $mercado->url_youtube = YoutubeID($mercado->url_youtube);

        $mercado->save();

        $mercado->productos()->sync($request->get('productos',[]), false);

        $mercado->users()->sync($request->get('users',[]), false);

        return redirect()->route('mercadoadmin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mercado = Mercado::find($id);

        $catname = Mercadocategory::find($mercado->mercadocategory_id); 
        $catname = $catname->name;

        return view('admin.mercados.show')
            ->withMercado($mercado)
			->withProductos($productos)
            ->withCatname($catname);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mercado = Mercado::find($id);

        $categories = Mercadocategory::all();

        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        $productos = Producto::all();
        
        $prods2 = array();
        foreach ($productos as $producto) {
            $prods2[$producto->id] = $producto->producto;
        }

        $users = User::all();
        $usersarray = array();
        foreach($users as $user){
            $usersarray[$user->id] = $user->name;
        }


        $latlong = array();
        $latlong[0] = $mercado->latitud;
        $latlong[1] = $mercado->longitud;

        return view('admin.mercados.edit')
            ->withMercado($mercado)
                ->withMercadocategories($cats)
                    ->withProductos($prods2)
                        ->withLatlong($latlong)
                            ->withUsers($usersarray);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
                'mercado'         => 'required|max:255',
                'domicilio'       => 'required',
                'descripcion'     => 'max:4000',
                'logo'            => 'mimes:jpeg,jpg,png,gif|max:2000',
                'image'           => 'mimes:jpeg,jpg,png,gif|max:2000'

        ));

        $mercado = Mercado::find($id);
        $mercado->mercado = $request->input('mercado');
        $mercado->domicilio = $request->input('domicilio');
        $mercado->url_web = $request->input('url_web');
        $mercado->url_facebook = $request->input('url_facebook');
        $mercado->categoria = $request->input('categoria');
        $mercado->mercadocategory_id = $request->input('mercadocategory_id');
        $mercado->latitud = substr($request->latitud, 0, 9);
        $mercado->longitud = substr($request->longitud, 0, 9);
        $mercado->telefono = $request->input('telefono');
        $mercado->email = $request->input('email');
        $mercado->horarios = $request->input('horarios');
        $mercado->localidad = $request->input('localidad');
        $mercado->provincia = $request->input('provincia');

        $mercado->descripcion = Purifier::clean($request->descripcion);

        $mercado->url_youtube = $request->video;

        if($request->input('visible') == 'on'){
            $mercado->visible = 1;
        }else {
            $mercado->visible = 0;
        }

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time(). 'logo' . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' . $filename);

            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            $oldfilename = $mercado->logo;
            $mercado->logo = $filename;

            Storage::delete($oldfilename);
        }

        if($request->hasFile('imagen')){
            $image = $request->file('imagen');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' . $filename);

            Image::make($image)->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            $oldfile = $mercado->imagen;

            $mercado->imagen = $filename;
            Storage::delete($oldfile);

        }

        function YoutubeID($url)
           {
                if(strlen($url) > 11)
                {
                    if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
                    {
                        return $match[1];
                    }
                    else
                        return false;
                }

                return $url;
        }
        $mercado->url_youtube = YoutubeID($mercado->url_youtube);

        $mercado->save();

        if (isset($request->users)) {
            $mercado->users()->sync($request->users);
        } else {
            $mercado->users()->sync(array());
        }

        if (isset($request->productos)) {
            $mercado->productos()->sync($request->productos);
        } else {
            $mercado->productos()->sync(array());
        }


        return redirect()->route('mercadoadmin.show', $mercado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mercado = Mercado::find($id);

        $mercado->productos()->detach();
        $mercado->users()->detach();

        Storage::delete($mercado->logo);
        Storage::delete($mercado->imagen);

        $mercado->delete();

        Session::flash('success', 'Mercado Eliminado');
        return redirect()->route('mercadoadmin.index');
    }
}
