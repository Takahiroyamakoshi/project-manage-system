<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        var_dump($user->name);
        return view('mypage', [
            'user' => $user,
            'username' => $user->name,
            'email' => $user->email
        ]);
        // return view('user-info');
    }

    public function update(Request $request)
{
    $loginUserId = Auth::id();

    if ($request->filled('password')) {
        User::find($loginUserId)
        ->update([
            'password' => Hash::make($request->password)
        ]);
    } else {
        User::find($loginUserId)->update($request->all());
    }

    return back()->with('success', 'プロフィールが更新されました。');
}

}
