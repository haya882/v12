<?php

namespace App\Http\Controllers\Admin;


use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;


class AdminController extends Controller
{
    function index(): View
    {
    return view('dashboard.index');

}
function profile(): View
    {
    return view('dashboard.profile');

}

function profile_save(): RedirectResponse
    {


}
function login(): View {
    return view('dashboard.login');

  }

  function store(Request $request): View {
   dd($request->all());
   return view('dashboard.login');

}
function orders(): View {
    return view('dashboard.orders');

  }

}
