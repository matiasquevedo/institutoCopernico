@extends('layouts.app')

@section('title',ucwords($page->title))

@section('content')
<div class="container bg-white px-3 py-3 border rounded">
	<h3> {{ ucwords($page->title) }} </h3>
	<div class="text-justify" style="word-wrap: break-word;">
		{!! $page->descripcion !!}
	</div>
</div>
@endsection