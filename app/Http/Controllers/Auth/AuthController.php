<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(Request $request)
    {
        $item = $request->all();
        // dd($item);
        return view('contact', compact('item'));
    }
}
