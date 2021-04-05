@include(session('template_name').'.partials.header')
<main>
	@yield('content')
</main>
@include(session('template_name').'.partials.footer')
