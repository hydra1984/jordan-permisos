@extends('layouts.app')

@section('body')
    <div class="row">
        <div class="card col">
            <div id="calendar">
            </div>
        </div>
    </div>
@endsection

@section('style')
<link href='{{ asset("assets/dashboard/vendors/fullcalendar/core/main.css") }}' rel='stylesheet' />
<link href='{{ asset("assets/dashboard/vendors/fullcalendar/daygrid/main.css") }}' rel='stylesheet' />
<link href='{{ asset("assets/dashboard/vendors/fullcalendar/timegrid/main.css") }}' rel='stylesheet' />
@endsection

@section('script')
<script src='{{ asset("assets/dashboard/vendors/fullcalendar/core/main.js") }}'></script>
<script src='{{ asset("assets/dashboard/vendors/fullcalendar/interaction/main.js") }}'></script>
<script src='{{ asset("assets/dashboard/vendors/fullcalendar/daygrid/main.js") }}'></script>
<script src='{{ asset("assets/dashboard/vendors/fullcalendar/timegrid/main.js")}}'></script>

<script src='{{ asset("assets/dashboard/vendors/fullcalendar/core/locales/es.js")}}'></script>

<script>
 document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      defaultDate: '2020-02-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2020-02-01'
        },
        {
          title: 'Long Event',
          start: '2020-02-07',
          end: '2020-02-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2020-02-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2020-02-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2020-02-11',
          end: '2020-02-13'
        },
        {
          title: 'Meeting',
          start: '2020-02-12T10:30:00',
          end: '2020-02-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2020-02-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2020-02-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2020-02-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2020-02-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2020-02-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2020-02-28'
        }
      ]
    });

    calendar.render();
  });
</script>
@endsection