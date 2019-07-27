<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\InquiryStore;
use App\Http\Controllers\Controller;
use App\Inquiry;

class InquriesController extends Controller
{
    public function store(InquiryStore $request)
    {
    	Inquiry::create($request->all());
    	return redirect('thank-you');
    }

    public function thankyou()
    {
    	$title = "Thank You";
    	return view('pages.frontend.thank-you', compact('title'));
    }
}
