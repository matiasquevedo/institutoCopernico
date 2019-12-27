<!-- Sidebar -->
<div class="bg-light border-right sidebar-admin" id="sidebar-wrapper">
  <div class="sidebar-heading" style="height: 70px;"><span class="align-middle"> {{config('app.name')}} </span></div>
  <div class="list-group list-group-flush px-2">
  	<a href="/panel" class="list-group-item list-group-item-action ">Dashboard</a>
    <a href=" {{route('user.index')}} " class="list-group-item list-group-item-action ">Usuarios<span class="float-right badge badge-primary">{{ count(\App\User::all())}}</span></a>
    <a href="{{route('page.index')}}" class="list-group-item list-group-item-action ">Secciones<span class="float-right badge badge-primary">{{ count(\App\Page::all())}}</span></a>
    <a href="" class="list-group-item list-group-item-action ">Eventos</a>
    <a href="" class="list-group-item list-group-item-action ">Categorias</a>
    <a href="" class="list-group-item list-group-item-action ">Productos</a>
    <a href="" class="list-group-item list-group-item-action ">Pedidos</a>
  </div>
</div>

<!-- End Sidebar -->