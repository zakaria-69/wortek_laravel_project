<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
       console.log('FullCalendar scripts loaded!');
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events: [
            {
              title: 'Réunion d\'équipe',
              start: '2023-09-10T10:00:00',
              end: '2023-09-10T12:00:00'
            },
            {
              title: 'Démo produit',
              start: '2024-09-15T14:00:00',
              end: '2024-09-15T16:00:00'
            }
          ],
          dateClick: function(info) {
            console.log('Date cliquée : ' + info.dateStr);
          }
        });

        calendar.render();
      });
    </script>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <h1>Réservez un créneau</h1>
    <div id="calendar-container">
    <div id='calendar'></div>
    </div>
</body>
</html>