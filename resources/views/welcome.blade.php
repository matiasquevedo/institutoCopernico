@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="bg-white px-3 py-3 border rounded mx-3">
	<div class="container-fluid">
		<h3>Bienvenido!</h3>
		<h4>{{config('app.name')}}</h4>
	</div>    
</div>
@if(count($pages)>0)
	<div class="bg-white py-2 mt-5">
		<div class="container">
			@foreach($pages as $page)
			<div class="my-5">
				<h3><a href="{{route('public.page',$page->slug)}}">{{ ucwords($page->title) }}</a></h3>
				<div>
					{!! $page->descripcion !!}
				</div>
			</div>
			@endforeach
		</div>
	</div>
@endif

@endsection