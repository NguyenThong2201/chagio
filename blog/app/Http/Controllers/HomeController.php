<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('news')->where('display_home', '=', 1)->paginate(LIMIT);
        return view('page.home', compact('news'));
    }
    public function detail($title_sale)
    {
        //echo Route::getFacadeRoot()->current()->uri();
        $url_comment = $title_sale;
        $newsDetail = News::where('title_sale', '=', $title_sale )->first();
        return view('page.detail',compact('newsDetail', 'url_comment'));
    }
    public function service(){
        //\DB::enableQueryLog();
        //print_r(\DB::getQueryLog());die();
        $newsService = DB::table('news')->where('display_home', '=', 1)->where('category_id', '=', 1)->paginate(LIMIT);
        return view('page.service', compact('newsService'));
    }
    public function support(){
        $newsSupport = DB::table('news')->where('display_home', '=', 1)->where('category_id', '=', 2)->paginate(LIMIT);
        return view('page.support', compact('newsSupport'));
    }
    public function skills(){
        $newsSkills = DB::table('news')->where('display_home', '=', 1)->where('category_id', '=', 3)->paginate(LIMIT);
        return view('page.skills', compact('newsSkills'));
    }
    public function contact(){
        return view('page.contact');
    }
}
