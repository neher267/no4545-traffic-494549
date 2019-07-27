@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Profile</h2>                
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <div class="profile_img">
                        <div id="crop-avatar">
                            <!-- Current avatar -->
                            @if(empty($user->image))
                            <img style="height: 100px; width: 100px" class="img-responsive avatar-view" src="{{asset('public/images/user.png')}}" alt="Avatar" title="Change the avatar">
                            @else
                            <img style="height: 100px; width: 100px" class="img-responsive avatar-view" src="{{asset($user->image)}}" alt="Avatar" title="Change the avatar">
                            @endif 
                        </div>
                    </div>
                    <h3 style="font-size: 19px;font-weight: 700;margin-top: 20px;">{{$user->name }}</h3>

                    <ul class="list-unstyled user_data">
                        <li>
                            <i class="fa fa-briefcase"></i> {{$user->role == 1 ? "Admin":"Moderator"}}
                        </li> 
                        <li><i class="fa fa-envelope"></i> {{$user->email}}</li>                       
                        <li><i class="fa fa-map-marker"></i> {{$user->address}}</li>                       
                    </ul>

                    <a href="{{route('profile.edit')}}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                    <br />                    

                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="profile_title">
                        <div class="col-md-12">
                            <h2>About Me</h2>
                            <hr>
                            <div style="text-align: justify; color: black">
                                <?php echo html_entity_decode($user->about) ?>
                            </div>
                        </div>
                        
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection