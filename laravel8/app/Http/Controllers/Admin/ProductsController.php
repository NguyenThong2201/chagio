<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $products = [];
	    return view('admin.pages.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$category = Category::all();
	    return view('admin.pages.products.create')->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$products = new Products();
	    $validator = \Validator::make($request->all(),[
		    'title'         => 'required|min:2|max:250',
		    'category_id'   => 'required',
		    'contents'      => 'required'
	    ],[
		    'title.required'    => 'Tên Sản Phẩm không được trống.',
	        'category_id.required' => 'Loại Sản Phẩm không được trống.',
		    'contents.required' => 'Nội dung Sản Phẩm không được trống.',
	    ]);
	    if ($validator->fails()) {
		    return response()->json(['error' => $validator->errors(),'success' => 0]);
	    }
	    $data['title']       = $request->title;
	    //$path                = $request->file('image')->store('products');
	    $data['image']       = $request->file_name;;
	    $data['category_id'] = $request->category_id;
	    $data['summary']     = $request->summary;
	    $data['contents']    = $request->contents;
	    $data['completed']   = 1;
	    $data['status']      = 0;
	    if (!empty($request->status)){
		    $data['status']  = 1;
	    }
	    if (!empty($request->id)){
			$products = Products::find($request->id);
			$products->fill($data);
		    $products->save();
	    }else{
		    $products->fill($data);
		    $products->save();
	    }
	    return response()->json([
		    'message' => 'Product Added Successfully',
		    'success' => 1,
		    'products' => $products
	    ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$product  = Products::find($id);
	    $category = Category::all();
	    return view('admin.pages.products.create',compact('product','category'));
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
        //
    }
}
