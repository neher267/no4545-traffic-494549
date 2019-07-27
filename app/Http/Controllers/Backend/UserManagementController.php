<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserManagementController extends Controller
{
	public function __construct()
    {
        //$this->middleware('Backend');
	}

    public function index()
    {
    	$name = 'users';
    	$page_title = "All Users";
    	$results = User::where('role' ,'!=', 3)->get();
    	return view('pages.backend.users.index', compact('results', 'page_title', 'name'));
    }

    public function edit_role(User $user)
    {
    	$name = 'users';
    	$page_title = "Edit User";
    	return view('pages.backend.users.edit', compact('user', 'page_title', 'name'));
    }

    public function update_role(Request $request, User $user)
    {
    	$user->role = $request->role;
    	$user->save();

    	return redirect('dashboard/users')->withSuccess('Update Success!');
    }

    public function destroy(User $user)
    {
    	$user->delete();
    	return back()->withSuccess('Delete success!');
    }
}
