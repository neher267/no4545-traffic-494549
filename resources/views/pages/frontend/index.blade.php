@extends('layouts.frontend.app')

@section('content')
	<!--Slider Area Start-->
	@include('pages.frontend.partials.index._slide')

	<!--End of Slider Area-->	

	@include('layouts.frontend.partials._contact-form')

	<!--Fun Factor Area Start-->
	@include('pages.frontend.partials.index._fun-factor')
	
	<!--End of Fun Factor Area-->

@endsection