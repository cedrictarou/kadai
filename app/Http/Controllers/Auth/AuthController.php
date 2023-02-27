<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function thanks(ContactRequest $request)
    {
        $item = $request->all();
        $user = User::where('email', $item['email'])->first();
        if (!$user) {
            // ユーザーがいなかったら新規登録
            $user = User::create($item);
        }
        return view('thanks', compact('user'));
    }
}
