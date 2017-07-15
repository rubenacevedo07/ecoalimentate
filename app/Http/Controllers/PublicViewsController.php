<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notice;
use App\Videoaudiov;
use App\Mercado;
use App\Mercadocategory;
use App\Producto;


class PublicViewsController extends Controller
{
    public function welcome()
    {
        $notices = Notice::orderBy('id','desc')->take(6)->get();

        return view('welcome')->withNotices($notices);
    }

    public function notices()
    {
        $notices = Notice::orderBy('id','desc')->paginate(6);

        return view('public.notices')->withNotices($notices);
    }
    public function getSingle($slug)
    {
    	$notice = Notice::where('slug', '=', $slug)->first();

    	return view('public.singlenotice')->withNotice($notice);
    }
	
	public function getEmprendimiento($id)
    {
    	$mercado = Mercado::where('id', '=', $id)->first();
		
    	return view('public.showmercado')->withMercado($mercado);
    }
	
	
    public function recursos()
    {
    	$recursos = Videoaudiov::orderBy('id','desc')->paginate(6);

    	return view('public.recursos')->withRecursos($recursos);
    }

    public function productores()
    {   
        $productores = Mercado::where('mercadocategory_id', 4)->get();

        $chunks = $productores->chunk(3);
        $chunks->toArray();
    
        return view('public.productores')
            ->withProductores($productores);
    }
	
	
	
    public function puntosventa()
    {   


        $producs = Mercado::where('mercadocategory_id', 3)->get();
        $puntosventa = Mercado::where('mercadocategory_id', 2)->get();

        $productores = $producs->merge($puntosventa);

        $chunks = $productores->chunk(3);
        $chunks->toArray();
    
        return view('public.puntosdeventa')
            ->withProductores($productores);
    }

    public function mapa()
    {

        $producx = Mercado::where('mercadocategory_id', 4)->get();
        $producs = Mercado::where('mercadocategory_id', 3)->get();
        $puntosventa = Mercado::where('mercadocategory_id', 2)->get();

        $prod = $producs->merge($puntosventa);
        $productores = $prod->merge($producx);

        $chunks = $productores->chunk(3);
        $chunks->toArray();

        return view('public.mapa')
            ->withProducers($productores);
    }

    public function gruposdeconsumo()
    {   
    
        return view('public.gruposdeconsumo');
    }
    public function recetas()
    {

        return view('public.recetas');
    }
}
