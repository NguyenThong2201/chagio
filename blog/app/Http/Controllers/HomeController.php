<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('news')->where('display_home', '=', 1)->get();
        return view('page.home', compact('news'));
    }
    public function detail()
    {
        return view('page.detail');
    }
}
