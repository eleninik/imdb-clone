<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all()->sortBy('type');
        return view('admin.indexUser')->with('users', $users);
    }

    public function store(Request $request)
    {
        $user = $this->validate(request(), [
            'name' => 'required', 
            'username' => 'required', 
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($user);

        return redirect('admin/users')->with('success', 'User added!');
    }

    public function updateUser(Request $request, $id) {
        $user = User::find($id);
        
        $this->validate(request(), [
            'name' => 'required', 
            'username' => 'required', 
            'email' => 'required',
            'password' => 'required',
        ]);

        $user->name =  $request->get('name');
        $user->username =  $request->get('username');
        $user->email =  $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect('admin/users')->with('success', 'User is now updated!');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.editUser', compact('user', 'id'));
    }

    public function update(Request $request, $id) {
        $user = User::find($id);

        $user->type = 'admin';
        $user->save();

        return redirect('admin/users')->with('success', 'User is now admin!');

    }

    public function removeAdmin(Request $request, $id) {
        $user = User::find($id);

        $user->type = 'standard';
        $user->save();

        return redirect('admin/users')->with('success', 'User is now admin!');

    }


    public function show($id)
    {
        $user = User::find($id);
        return view('admin.showUser')->with('user', $user);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users')->with('success', 'User has been deleted!');
    }
}
