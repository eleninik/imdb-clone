<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;

class ChangePasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $currentPassword = $request->currentPassword;
        $newPassword = $request->newPassword;

        if (Hash::check($currentPassword, $user->password)) {
            $request->user()->fill([
                'password' => Hash::make($request->newPassword)
            ])->save();

            return back()
    		    ->with('success','Password changed.');
        } else {
            return back()
                ->with('error', 'Something went terribly wrong! (You probably typed the wrong password)');
        }
    }
}
