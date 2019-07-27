<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Hash;

class ProfileController extends Controller
{
    use RrsourceDelete;

	private $image_path = "images/Profile";

    public function show()
    {
        $user = Auth::user();
        return view('pages.backend.users.profile', compact('user'));
    }

    public function edit()
    {
        $result = Auth::user();
        return view('pages.backend.users.edit-profile', compact('result'));
    }

    public function settings()
    {
        return view('pages.backend.users.settings');
    }

    public function changePassword(Request $request)
    {
         $request->validate([
            'c_password' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
          ]);

        if($user = Auth::user()) {
            if(Hash::check($request->c_password, $user->password)) {
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect('dashboard')->withSuccess('Password Changed!');
            }
        }

        return back()->withError('Your Current Password is not valid!');
    }


    public function update(Request $request, User $user)
    {
    	$data = $user;
        $data->name = $request->name;
        $data->address = $request->address;
        $data->about = $request->about;
        
        if(!empty($request->image)) 
        {
        	if(!empty($user->image))
        	{
                $this->delete($user->image);        
        	}
            
            $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']);
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path($this->image_path), $imageName);
            $data->image = $this->image_path.'/'.$imageName;        
        }     

        $data->save();

        return redirect('dashboard/profile')->withSuccess("Success!");
    }


}
