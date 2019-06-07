<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Hash;


class DeleteAccountController extends Controller
{
    public function DeleteAccount(request $request)
    {
        $user = Auth::user();
        $currentPassword = $request->currentPassword;

        Auth::logout();

        if (Hash::check($currentPassword, $user->password)) {
            $user->delete(); 

            if ($user->delete()) {
                return Redirect::route('/')->with('success', 'Your account has been deleted!');
           }

        }
    }
}
