@extends('layouts.frontend.app')

@section('content')
<div class="course-details-area section-padding" id="grad1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                   <h1 class="text-center">Thank You for</h1>
                   <h1 class="text-center" style="margin-bottom: 15px;">Contacting Medientry!</h1>

                   <div class="devider"></div>

                   <p class="text-center" style="margin-top: 20px;">You will be hearing from us shortly.</p>
                   <p class="text-center">In the meantime, feel free to continue exploring our site.</p>

                   <div style="margin: auto; width: 235px; margin-top: 20px;">                   	
                   		<a href="{{ url('/') }}" class="btn btn-default" style="color: #5d5100;">Continue Exploring Medientry</a>
                   </div>
            </div>            
        </div>
    </div>
</div>
@endsection