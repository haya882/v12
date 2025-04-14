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
       $products= Product::all();
       return view('dashboard.products.index',compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','name')->get();
        $product = new product();
        return view('dashboard.products.create', compact('categories','product'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image'=>'required',
            'gallery'=>'required',
            'price' => 'required|numeric|min:1|max:99999',
            'gender' => 'required|in:women,men',
            'description' => 'required|string|max:1000',
            'quantity'=>'required',
            'category_id'=>'required',

        ]);

        // $data = $request->except('_token' , 'image', 'gallery');
        $product = product::create([
            'name'=>'',
            'description'=> '',
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'category_id'=>$request->category_id,


        ]);

        $product = product::create($data);

        //Add image to relation
        $img_name = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $img_name);
        $product->image()->create([
            'path' => $img_name,
        ]);

        foreach($request->gallery as $img) {
            $img_name = rand().time().$img->getClientOriginalName();
            $img->move(public_path('images'), $img_name);
            $product->image()->create([
                'path' => $img_name,
                'type'=>'gallery'
            ]);
        }

        return redirect()
            ->route('admin.products.index')
            ->with('msg', 'Product added successfully')
            ->with('type', 'success');
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
    public function edit(Product $product)
    {
        $categories = Category::select('id','name')->get();

        return view('dashboard.products.edit' , compact('product', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|min:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 2MB كحد أقصى
        ]);


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'products updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {

        if ($product->image) {
            File::delete(public_path('images/' . $product->image->path));
        }

        if ($product->gallery) {
            foreach ($product->gallery as $img) {
                File::delete(public_path('images/' . $img->path));
            }
        }
        $product->image()->delete();
        $product->gallery()->delete();
        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('msg', 'Product deleted successfully')
            ->with('type', 'danger');
    }
}
