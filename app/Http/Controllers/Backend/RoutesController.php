<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Route;

class RoutesController extends Controller
{
    protected $path = 'pages.backend.routes.';
    protected $route_name = "routes";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "All Brands";
        $name = $this->route_name;
        $results = Route::latest()->get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add New";
        $name = $this->route_name;
        return view($this->path.'create', compact('page_title', 'name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	//dd($request->all());
	$data = new Route;
	$data->name = $request->name;
	$data->length = $request->length;  
	$data->save();

	return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
      return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
    $result = $route;
	$page_title = $route->name.": Edit";
	$name = $this->route_name;
	return view($this->path.'edit', compact('name', 'page_title', 'result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        $data = $route;
        $data->name = $request->name;
        $data->length = $request->length;     

        $data->save();

        return redirect('dashboard/routes')->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
      $route->delete();
      return back()->withSuccess("Success!");
    }
}
