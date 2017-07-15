<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Notice;
use App\Tag;
use App\Category;
use Carbon\Carbon; 
use Image;
use Storage;
use Purifier;
use Session;

class NoticeCrudController extends Controller
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
        $categories = Category::all();
        $tags = Tag::all();

        $notices = Notice::orderBy('id','desc')->paginate(7);
        return view('admin.notices.index')
            ->withNotices($notices);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $tags = Tag::get();
        return view('admin.notices.create')
            ->withCategories($categories)
            ->withTags($tags);
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
                'slug'          => 'required|alpha_dash|min:5|max:255|unique:notices,slug',
                'category_id'   => 'required|integer',
                'body'          => 'required',
                'featured_image'=> 'image'
            ));

        
        //store in the DB
        $notice = new Notice;
        $notice->title = $request->title;
        $notice->slug = $request->slug;
        $notice->category_id = $request->category_id;
        $notice->link = $request->link;
        $notice->body = Purifier::clean($request->body);
        $notice->published = 1;

        //save our image
        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' . $filename);

            Image::make($image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            $notice->featured_image = $filename;
        }
        else{
            $notice->featured_image = " ";   
        }
        $notice->video = $request->video;
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
        $notice->video = YoutubeID($notice->video);

        $notice->save();

        $tags = $request->input('tags', []);

        $notice->tags()->sync($tags, false);

        //redirect to another page
        Session::flash('success', 'La noticia fue cargada exitosamente!');

        return redirect()->route('news.show', $notice->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::find($id);

        return view('admin.notices.show')->withNotice($notice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);


        $tags = Tag::all();
        $tags2 = array();

        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->name;
        }



        $categories = Category::all();
        $cats = array();
        foreach($categories as $category){
            $cats[$category->id] = $category->name;

        }

        return view('admin.notices.edit')->withNotice($notice)->withCategories($cats)->withTags($tags2);
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
            'title'         =>'required|max:255',
            'slug'          => "required|alpha_dash|min:5|max:255|unique:notices,slug, $id",
            'category_id'   => 'required|integer',
            'body'          => 'required',
            'featured_image'=> 'image'
        ));
    
        // Save the data to the database
        $notice = Notice::find($id);
        $notice->title = $request->input('title');
        $notice ->slug = $request->input('slug');
        $notice->category_id = $request->input('category_id');
        $notice->body = Purifier::clean($request->input('body'));
        
        if($request->hasFile('featured_image')){

            //add the new photo
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' . $filename);

            Image::make($image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            $oldfilename = $notice->featured_image;

            $notice->featured_image = $filename;

            Storage::delete($oldfilename);
        }

        if(isset($request->video)){
            $notice->video = $request->video;
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
            $notice->video = YoutubeID($notice->video);
        }

        $notice->save();

        $tags = $request->input('tags', []);

        $notice->tags()->sync($tags, true);

        //Flash message
        Session::flash('success', 'Se ha actualizado la noticia correctamente.');

        return redirect()->route('news.show', $notice->id);
    }

    public function hiddeNotice($id){
        $notice = Notice::find($id);
        $notice->visible = 0;
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
         $notice->tags()->detach();
         Storage::delete($notice->featured_image);
        $notice->delete();
        Session::flash('success', 'Post Eliminado');
        return redirect()->route('news.index');
    }
}
