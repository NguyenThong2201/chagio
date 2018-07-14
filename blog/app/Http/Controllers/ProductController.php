<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDashboard(){
        return view('admin.dashboard.dashboard');
    }
    public function getProduct(){
        return view('admin.product.list');
    }
}