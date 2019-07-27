<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Training\Course;

class HomeController extends Controller
{
	/**
	* Frontend Pages Root path
	*
	* @var string
	*/
	protected $viewPath = 'pages.frontend.';

	/**
	* Show the application Home Page.
	*/

    public function index()
    {
    	$title = "Home";
    	return view($this->viewPath.'index', compact('title'));
    }

    /**
	* Show the application About Page.
	*/

    public function about()
    {
    	$title = "About Us";
    	return view($this->viewPath.'about', compact('title'));
    }

    public function mbbs_in_bd()
    {
        $title = "MBBS IN BANAGLAGESH";
        return view($this->viewPath.'mbbs-in-bd', compact('title'));
    }    

    public function why_choose_us()
    {
        $title = "Why Chooe Use";
        return view($this->viewPath.'why-choose', compact('title'));
    } 

    public function what_we_do()
    {
        $title = "What We Do";
        return view($this->viewPath.'what-we-do', compact('title'));
    }

    public function privacyPolicy()
    {
        $title = "Privacy Policy";
        return view($this->viewPath.'privacy-policy', compact('title'));
    }
}
