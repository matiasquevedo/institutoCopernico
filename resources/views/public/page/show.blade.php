@extends('layouts.app')

@section('title',ucwords($page->title))

@section('content')
<div class="container-fluid sections my-5 ">
	<div class=" bg-white p-3">
		<h3> {{ ucwords($page->title) }} </h3>
		<div class="text-left page-description" style="word-wrap: break-word;">
			{!! $page->descripcion !!}
		</div>
	</div>
</div>

@endsection