@extends('admin.template.main')

@section('title','Panel')

@section('content')
<div class="bg-white px-2 py-3 border rounded">
	<h3>Panel Administrador</h3>

</div>

@endsection

@section('js')
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    console.log("no se que onda");
  });
</script>
@endsection