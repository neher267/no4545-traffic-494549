<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    /**
	* Frontend Pages Root path
	*
	* @var string
	*/
	protected $viewPath = 'pages.frontend.';

    /**
	* Show the application Training Popular Courses Page.
	*/
    public function index()
    {
    	$title = "Contact Us";
    	return view($this->viewPath.'contact', compact('title'));
    }
}
