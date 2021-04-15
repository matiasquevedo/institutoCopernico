@extends('layouts.app')

@section('title',ucwords($page->title))

@section('content')
<<<<<<< HEAD
<div class="container bg-white px-3 py-3 border rounded">
	<h3> {{ ucwords($page->title) }} </h3>
	<div class="text-justify" style="word-wrap: break-word;">
		{!! $page->descripcion !!}
=======
<div class="container-fluid sections my-5 ">
	<div class=" bg-white p-3">
		<h3> {{ ucwords($page->title) }} </h3>
		<div class="text-left page-description" style="word-wrap: break-word;">
			{!! $page->descripcion !!}
		</div>
>>>>>>> ea65a7233f54606167e315223897505bd1dbc7d7
	</div>
</div>
@endsection