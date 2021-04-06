@include(session('template_name').'.partials.header')
<link rel="stylesheet" href="{{asset('css/font-size.css')}}">
<main>
	@yield('content')
</main>
@include(session('template_name').'.partials.footer')
