<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('profile', [
            'user' => $user,
            'username' => $user->name,
            'email' => $user->email
        ]);
        // return view('user-info');
    }

    public function update(Request $request)
    {
        $loginUserId = Auth::id();
        DB::beginTransaction();
        try {
            $user = User::find($loginUserId);
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
            $user->name = $request->username;
            $user->email = $request->email;
            $user->save();
            DB::commit();
            return redirect()->route('user.profile')->with('success', '更新が完了しました');;
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
