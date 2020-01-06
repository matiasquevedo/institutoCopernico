@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="bg-white px-3 py-3 border rounded mx-3">
	<div class="container-fluid">
		<h3>Bienvenido!</h3>
		<h4>{{config('app.name')}}</h4>
		<prueba></prueba>
	</div>    
</div>
@endsection