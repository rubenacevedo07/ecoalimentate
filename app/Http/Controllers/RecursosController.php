<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videoaudiov;
use Session;

class RecursosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recursos = Videoaudiov::orderBy('id','desc')->paginate(6);
        return view('admin.recursos.index')->withRecursos($recursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recursos.create');
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
                'title'         => 'required|max:255',
                'description'   => 'required',
                'link'          => 'required'
            ));

        
        //store in the DB
        $recurso = new Videoaudiov;
        $recurso->title = $request->title;
        $recurso->description = $request->description;

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
        $recurso->videoid = YoutubeID($request->link);

        $recurso->save();


        //redirect to another page
        Session::flash('success', 'El recurso fue cargado exitosamente');

        return redirect()->route('recursos.show', $recurso->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recurso = Videoaudiov::find($id);

        return view('admin.recursos.show')->withRecurso($recurso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recurso = Videoaudiov::find($id);

        $recurso->delete();

        Session::flash('success','Se ha eliminado el recurso audiovisual');

        return redirect()->route('recursos.index');
    }
}
