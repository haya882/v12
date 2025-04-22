<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
        ]);
    
        $product = Product::findOrFail($request->product_id);
    
        if (auth()->check()) {
            $user = auth()->user();
    
            $existingWishlistItem = Wishlist::where('user_id', $user->id)
                                            ->where('product_id', $product->id)
                                            ->first();
    
            if ($existingWishlistItem) {
                return response()->json([
                    'message' => 'تمت إضافة المنتج بالفعل إلى المفضلة',
                ], 200);
            }
    
            // If not, add the product to the wishlist
            $wishlistItem = new Wishlist();
            $wishlistItem->user_id = $user->id;
            $wishlistItem->product_id = $product->id;
            $wishlistItem->save();
    
            return response()->json([
                'message' => 'تمت إضافة المنتج إلى المفضلة بنجاح', // "The product was successfully added to the wishlist"
                'wishlist_count' => $user->wishlist()->count(),
            ], 200);
        }
    
        // If the user is not authenticated, handle the session wishlist logic
        $wishlist = session()->get('wishlist', []);
    
        if (isset($wishlist[$product->id])) {
            // If the product is already in the session wishlist
            return response()->json([
                'message' => 'تمت إضافة المنتج بالفعل إلى المفضلة', // "The product is already added to the wishlist"
            ], 200);
        }
    
        // Add the product to the session wishlist
        $wishlist[$product->id] = [
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->img_path,
        ];
        session()->put('wishlist', $wishlist);
    
        return response()->json([
            'message' => 'تمت إضافة المنتج إلى المفضلة بنجاح', // "The product was successfully added to the wishlist"
            'wishlist_count' => count($wishlist),
        ], 200);
    }
    

public function index()
{
    if (auth()->check()) {
        $wishlistItems = auth()->user()->wishlist()->with('product')->get();
    } else {
        $wishlistItems = session()->get('wishlist', []);
    }

    return view('website.wishlist.index', compact('wishlistItems'));
}
public function removeFromWishlist(Request $request)
{
    $productId = $request->product_id;

    if (auth()->check()) {
        $user = auth()->user();
        $user->wishlist()->where('product_id', $productId)->delete();
    } else {
        $wishlist = session()->get('wishlist', []);
        unset($wishlist[$productId]);
        session()->put('wishlist', $wishlist);
    }

    return response()->json([
        'message' => 'تم حذف المنتج من المفضلة بنجاح',
        'wishlist_count' => auth()->check() ? auth()->user()->wishlist()->count() : count(session()->get('wishlist')),
    ]);
}

}
