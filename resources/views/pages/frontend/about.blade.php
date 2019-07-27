@extends('layouts.frontend.app')

@section('content')
<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">        
        <div class="row">
            <div class="col-md-6">
                <div class="about-text-container" style="text-align: justify;">                    

                    <p>
                        <span class="bold">About Text</span>
                    </p>            
                </div>
            </div>
            <div class="col-md-6">
                <div class="skill-image">
                    <img src="{{ asset('public/frontend/img/banner/6.jpg') }}" alt="" style="padding-top: 10px;">
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection