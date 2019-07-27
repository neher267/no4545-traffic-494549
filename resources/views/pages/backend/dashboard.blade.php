@extends('layouts.backend.app')

@section('content')
<div class="row top_tiles" style="color: white">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats color1">
            <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
            <div class="count">{{$users}}</div>
            <h3>Users</h3>
        </div>
    </div>
</div>
@endsection