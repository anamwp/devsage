@extends('layouts.app')

@section('content')
	{{-- @include ('components.example-component') --}} {{-- This is the old way and passing varibale will not work --}}
	{{-- <x-example-component title="Example Componentt"/> --}}
	{{-- shortcode --}}
	{{-- {!! do_shortcode('[custom_field_data]') !!} --}}

	@while(have_posts()) @php(the_post())
		@include('partials.page-header')
		@includeFirst(['partials.content-page', 'partials.content'])
	@endwhile
@endsection
