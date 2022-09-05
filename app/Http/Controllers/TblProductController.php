<?php

namespace App\Http\Controllers;

use App\Models\tbl_products;

use App\Models\tbl_categories;

use App\Models\tbl_tags;

use Illuminate\Http\Request;

class TblProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = tbl_products::paginate(5);
        return view('products' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = tbl_categories::all();
        $tags = tbl_tags::all();
        return view('add_products' , compact('categories' , 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        if($req->has('product_image')) {
            $imageName = $req->product_name . '- image-' . time() . rand(1, 1000) . '.' . $req->product_image->extension();
            $req->product_image->move(public_path('images/products_single_images'), $imageName);
        }
        tbl_products::insert(array(
            'product_name' => $req->product_name,
            'product_price' => $req->product_price,
            'category_id' => $req->product_category,
            'tag_id' => $req->product_tag,
            'product_size' => $req->product_size,
            'product_color' => $req->product_color,
            'description' => $req->product_des,
            'product_image' => $imageName,
            'publication_status' => $imageName,
        ));
        return redirect("/")->with('message' , 'Product Was Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbl_products  $tbl_product
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_products $tbl_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbl_products  $tbl_product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = tbl_categories::all();
        $tags = tbl_tags::all();
        $product = tbl_products::find($id);
        return view('edit_product' , compact('product' , 'categories' , 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbl_products  $tbl_product
     * @return \Illuminate\Http\Response
     */
    public function update($id , Request $req)
    {
        $product = tbl_products::find($id);
        
        $product->update($req->all());
        return redirect('products')->with('message' , 'Changes Saved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbl_products  $tbl_product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = tbl_products::find($id);
        unlink("images/products_single_images/$product->product_image");
        $product->delete();
        return redirect()->back()->with('message' , 'Product Deleted Successfully!');
    }
}
