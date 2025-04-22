<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $query = Product::query();
    
        if ($request->has('gender') && $request->gender !== 'all') {
            $query->where('gender', $request->gender);
        }

        if ($request->has('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }
        $products = $query->paginate(1);
        $product_categories = Product::GENDERS; 
        return view('website.products', compact('products', 'product_categories'));
    }
    public function show($id)
{
    $product = Product::with(['reviews', 'role'])->findOrFail($id);
    $bestSellers = Product::orderByDesc('quantity')->limit(4)->get();
    $newProducts = Product::latest()->take(4)->get();

    return view('website.products.show', compact('product', 'bestSellers', 'newProducts'));
}

    
    
    public function storeReview(Request $request, $productId)
    {
        $request->validate([
            'star' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);
    
        Review::create([
            'product_id' => $productId,
            'user_id' => auth()->id(),
            'star' => $request->star,
            'comment' => $request->comment,
        ]);
    
        return back()->with('success', 'شكرا على تقييمك!');
    }
    

}
