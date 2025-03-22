<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    function index(): View
    {
    return view('website.index');
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
function checkout(): View
{
return view('website.checkout');
}
function details(): View
{
return view('website.details');
}
function products(): View
{
return view('website.products');
}
function view(): View
{
return view('website.view');
}
function wishlist(): View
{
return view('website.wishlist');
}
}

