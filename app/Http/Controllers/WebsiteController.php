<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    function index(): View
    {
        $data = [];
        $data['categories'] = Category::take('6')->get();
        $data['men_products'] = Product::with('role')
            ->where('gender', 'men')
            ->take(4)
            ->get();

        $data['women_products'] = Product::with('role')
            ->where('gender', 'women')
            ->take(4)
            ->get();
        $data['latest_products'] = Product::with('role')->take('4')->latest()->get();
        return view('website.index', $data);
    }

    function about(): View
    {
        return view('website.about');
    }
    function login(): View
    {
        return view('website.login');
    }
    function cart(): View
    {
        return view('website.cart');
    }
   
    function details(): View
    {
        return view('website.details');
    }
   
    function view(): View
    {
        return view('website.view');
    }
    function wishlist(): View
    {
        return view('website.wishlist');
    }
    function contact(): View
    {
        return view('website.contact');
    }
}
