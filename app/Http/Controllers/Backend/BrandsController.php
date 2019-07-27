<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Brand;

class BrandsController extends Controller
{
    use RrsourceDelete;

    protected $path = 'pages.backend.brands.';
    protected $route_name = "brands";
    private $image_path = "images/Brands";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "All Brands";
        $name = $this->route_name;
        $results = Brand::latest()->get();
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
        return view($this->path.'create', compact('page_title'));
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
        $request->validate(['src' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']);
        $brandName = time().'.'.$request->src->getClientOriginalExtension();
        $request->src->move(public_path($this->image_path), $brandName);

        $data = new Brand;
        $data->name = $request->name;
        $data->type = $request->type;
        $data->address = $request->address;
        $data->url = $request->url;
        $data->src = $this->image_path.'/'.$brandName;
        $data->save();

        return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $Brand)
    {
        //dd($Brand);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $result = $brand;
        $page_title = $brand->name.": Edit";
        $name = $this->route_name;
        return view($this->path.'edit', compact('page_title', 'result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $data = $brand;
        $data->name = $request->name;
        $data->type = $request->type;
        $data->address = $request->address;
        $data->url = $request->url;
        
        if(!empty($request->src)) 
        {
            $this->delete($brand->src);
            $request->validate(['src' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']);
            $brandName = time().'.'.$request->src->getClientOriginalExtension();
            $request->src->move(public_path($this->image_path), $brandName);
            $data->src = $this->image_path.'/'.$brandName;        
        }     

        $data->save();

        return redirect('dashboard/brands')->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $this->delete($brand->src);
        $brand->delete();
        return back()->withSuccess("Success!");
    }
}
