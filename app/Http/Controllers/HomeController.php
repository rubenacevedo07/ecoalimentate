<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::orderBy('id','desc')->take(6)->get();

        return view('welcome')->withNotices($notices);
    }

}
