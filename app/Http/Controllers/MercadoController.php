<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Carbon\Carbon; 
use Image;
use Storage;
use Purifier;
use Session;
use App\Mercado;
use App\Mercadocategory;
use App\Producto;


class MercadoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $mercado = Mercado::where('mercadocategory_id', 4)->get();
            
            $all = Mercado::orderBy('id','desc')->paginate(10);

            return view('productor.index')->withMercado($mercado)->withAll($all);   
        
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

        return view('productor.crearmercado')
         ->withCategories($categories)
            ->withProductos($productos);
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
        ));

        $mercado = New Mercado;
        $mercado->mercado = $request->mercado;
        $mercado->domicilio = $request->domicilio;
        $mercado->url_web = $request->url_web;
        $mercado->url_facebook = $request->url_facebook;
        $mercado->categoria = $request->categoria;
        $mercado->categoria_id = $request->categoria_id;
        $mercado->latitud = $request->latitud;
        $mercado->longitud = $request->longitud;
        $mercado->telefono = $request->telefono;
        $mercado->email = $request->email;
        $mercado->horarios = $request->horarios;
        $mercado->localidad = $request->localidad;
        $mercado->provincia = $request->provincia;
        $mercado->productos_json = $request->productos_json;
        $mercado->descripcion = Purifier::clean($request->descripcion);

        $mercado->url_youtube = $request->video;
        
        

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


        $productos = $request->input('productos', []);

        $mercado->productos()->sync($productos, false);

        $users = $request->input('users', []);

        $mercado->users()->sync($users, false);

        return redirect()->route('mercados.show', $mercado->id);

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

        return view('productor.showmercado')->withMercado($mercado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
                'logo'            => 'mimes:jpeg,jpg,png,gif|max:2000',
                'image'           => 'mimes:jpeg,jpg,png,gif|max:2000'
        ));

        $mercado = New Mercado;
        $mercado->mercado = $request->input('mercado');
        $mercado->domicilio = $request->input('domicilio');
        $mercado->url_web = $request->input('url_web');
        $mercado->url_facebook = $request->input('url_facebook');
        $mercado->categoria = $request->input('categoria');
        $mercado->categoria_id = $request->input('categoria_id');
        $mercado->latitud = $request->input('latitud');
        $mercado->longitud = $request->input('longitud');
        $mercado->telefono = $request->input('telefono');
        $mercado->email = $request->input('email');
        $mercado->horarios = $request->input('horarios');
        $mercado->localidad = $request->input('localidad');
        $mercado->provincia = $request->input('provincia');
        $mercado->user_id = Auth::user()->id;
        $mercado->productos_json = $request->input('productos_json');
        $mercado->descripcion = Purifier::clean($request->input('descripcion'));

        $mercado->url_youtube = $request->video;
        
        

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time() .'logo'. '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' . $filename);

            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            $mercado->logo = $filename;
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

        $mercado->url_youtube = YoutubeID($mercado->input('url_youtube'));

        $mercado->save();


        $productos = $request->input('productos', []);

        $mercado->productos()->sync($productos, true);

        return redirect()->route('mercados.show', $mercado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
