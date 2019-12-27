@extends('admin.template.main')

@section('title','Calendario')

@section('content')
<div class="bg-white px-3 py-3 border rounded">
	<h3>Calendario</h3>
	<div>
		<div id='calendar'></div>
	</div>
</div>
@endsection

@section('js')
<script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid','list' ],
          events : [
              @foreach($events as $event)
              {
                  title : '{{ $event->title}}',
                  start : '{{ $event->date }}',
                  user : ' {{$event->user->name}} ',
              },
              @endforeach
          ],
        });


        calendar.render();
      });

    </script>
@endsection