<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
    public function index() 
    {
        $users = User::get()->count();       
    	return view('pages.backend.dashboard', compact('users'));
    }

    public function successful_cases() 
    {
    	return view('pages.backend.successful-case.index');
    }   
    
}
