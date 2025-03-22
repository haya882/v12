<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products= Product::latest('id')->paginate(10);
       return view('dashboard.products.index',compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','name')->get();
        return view('dashboard.products.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'gallery' =>'required',
            'price'=>'required',
            'description'=>'required',
            'quantity'=>'required',
            'category-id'=>'required'
        ]);
        $data = $request->except('token','image');

        $product = Product::create($data);

        $img_name = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $image_name);
        $product->image()->create([
            'path' => $img_name
        ]);
        foreach($request->gallery as $img){
            $img_name = rand().time().$img->getClientOriginalName();
        $img->move(public_path('images'), $image_name);
        $product->image()->create([
            'path' => $img_name,
            'type' =>'gallery'

       ]);
    }

    return redirect()
        ->route('admin.Products.index')
        ->with('msg','Product added successfully')
        ->with('type','success');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
      File::delete( public_path('images/'.$product->image->path));
      foreach($product->gallery as $img){
        File::delete( public_path('images/'.$img->path));
      }
      $product->delete();
      return redirect()
      ->route('admin.Products.index')
      ->with('msg','Product deleted successfully')
      ->with('type','danger');
    }
}
