@extends('layouts.frontend.app')

@section('content')
	<div style="margin: 50px 15%;">
		<h1 class="text-center">This is inquiry form</h1>
		
		@if($errors->any())
		<div class="alert alert-danger" style="margin-top: 15px;">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif

		@if(session()->has('success'))
		<div class="alert alert-success">
			{{session()->get('success')}}
		</div>
		@endif

		<form action="{{ route('inquries.store') }}" method="post">
			{{ csrf_field() }}
			
			<div class="form-group">
				<label for="name">Your Name</label>
				<input id="name" name="name" type="text" class="form-control" placeholder="Enter your full name">
			</div>

			<div class="form-group">
				<label for="name">Your Email</label>
				<input id="email" name="email" type="email" class="form-control" placeholder="Enter your email">
			</div>

			<div class="form-group">
				<label for="mobileno">Your Mobile No</label>
				<input id="mobileno" name="mobile" type="text" class="form-control" placeholder="Enter your mobile no">
			</div>

			<div class="form-group">
				<label for="body">Message</label>
				<textarea id="body" name="body" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-default"  value="Submit Inquiry">
			</div>

		</form>
	</div>
@endsection