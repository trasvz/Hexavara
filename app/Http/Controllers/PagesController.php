<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function hexavara()
    {
        return view('hexavara');
    }
}