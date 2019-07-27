<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Node;
use App\Route;

class NodesController extends Controller
{
    protected $path = 'pages.backend.nodes.';
    protected $route_name = "nodes";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "All Brands";
        $name = $this->route_name;
        $results = Node::latest()->get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add New Traffic Point";
        $routes = Route::orderBy('name')->get();
        $name = $this->route_name;
        return view($this->path.'create', compact('page_title', 'name', 'routes'));
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
	$data = new Node;
	$data->name = $request->name;
    $data->route()->associate($request->route_id);
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
    public function show(Node $node)
    {
      return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Node $node)
    {
    $result = $node;
    $routes = Route::orderBy('name')->get();
	$page_title = $result->name.": Edit";
	$name = $this->route_name;
	return view($this->path.'edit', compact('name', 'page_title', 'result', 'routes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Node $node)
    {
        $data = $node;
        $data->name = $request->name;
        $data->length = $request->length;     

        $data->save();

        return redirect('dashboard/nodes')->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Node $node)
    {
      $route->delete();
      return back()->withSuccess("Success!");
    }
}
