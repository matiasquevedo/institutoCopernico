@extends('admin.template.main')

@section('title','Eventos')

@section('content')
<div class="bg-white px-3 py-3 border rounded">
	<h3>Eventos
    <a class="" href="{{route('event.create')}}" ><i style="font-size: 25px !important;" class="fas fa-plus-circle"></i></a>
    <a href="{{route('event.index')}}" data-method="delete" class="btn btn-outline-primary float-right"><i class="fas fa-list"></i></a>


  </h3>

	<div>
		<div id='calendar'></div>
	</div>
</div>


<div id="calendarModal" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
            <h4 id="modalTitle" class="modal-title"></h4>
        </div>
        <div id="modalBody" class="modal-body">
            Reservado por: <p id="userReserva"></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>
</div>
@endsection

@section('js')
<script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          default: 1,
          aspectRatio: 2,
          height: 650,
          eventClick:  function(event, jsEvent, view) {
              $('#modalTitle').html(event.title);
              $('#userReserva').html(event.user);
              console.log(event);
              $('#calendarModal').modal();
          },
          locale: 'es',
          plugins: [ 'dayGrid','list' ],
          events : [
              @foreach($events as $event)
              {
                  title : '{{ $event->title}}',
                  start : '{{ $event->date }}',
                  user : ' {{$event->user->name}} ',
                  textColor:'white',
                  @if($event->state == '1')
                    color:'green'
                  @else 
                    color:'red'
                  @endif
                  
              },
              @endforeach
          ]
        });


        calendar.render();
      });

    </script>
@endsection