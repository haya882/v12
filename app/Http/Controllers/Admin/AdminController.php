<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class AdminController extends Controller
{
    function index(): View
    {
    return view('dashboard.index');

}

}
