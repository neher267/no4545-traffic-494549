<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;

class ImageController extends Controller
{
    use RrsourceDelete;

    protected $path = 'pages.backend.images.';
    protected $route_name = "images";
    private $image_path = "images/Ecl";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "All Images";
        $name = $this->route_name;
        $results = Image::latest()->get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Create New Type";
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
        $imageName = time().'.'.$request->src->getClientOriginalExtension();
        $request->src->move(public_path($this->image_path), $imageName);

        $data = new Image;
        $data->name = $request->name;
        $data->type = $request->type;
        $data->priority = $request->priority;
        $data->src = $this->image_path.'/'.$imageName;
        $data->save();

        return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //dd($image);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        $result = $image;
        $page_title = $image->name.": Edit";
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
    public function update(Request $request, Image $image)
    {
        $data = $image;
        $data->name = $request->name;
        $data->type = $request->type;
        $data->status = $request->status;
        $data->priority = $request->priority;
        
        if(!empty($request->src)) 
        {
            $this->delete($image->src);
            $request->validate(['src' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']);
            $imageName = time().'.'.$request->src->getClientOriginalExtension();
            $request->src->move(public_path($this->image_path), $imageName);
            $data->src = $this->image_path.'/'.$imageName;        
        }     

        $data->save();

        return redirect('dashboard/images')->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $this->delete($image->src);
        $image->delete();
        return back()->withSuccess("Success!");
    }
}
