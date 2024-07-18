@extends('layouts.app')

@section('content')
	{{-- shortcode --}}
	{{-- {!! do_shortcode('[custom_field_data]') !!} --}}

	@while(have_posts()) @php(the_post())
		@include('partials.page-header')
		@includeFirst(['partials.content-page', 'partials.content'])
	@endwhile
@endsection
