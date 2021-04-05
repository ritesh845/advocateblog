@extends('layouts.main')
@section('content')
@if(\View::exists(session('template_name').'.pages.'.$page_name))
	@include(session('template_name').'.pages.'.$page_name)
@else
 @php 
 abort(404); 
 @endphp
@endif 


@endsection