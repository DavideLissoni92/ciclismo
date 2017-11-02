<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ciclismo trentino</title>
  <link href="img/logo.png" rel="shortcut icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />

  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>


  <link href="css/calendar.css" rel="stylesheet">

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark indigo">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" height="50" alt="" class="d-inline-block align-top">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Calendario</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="comunicati.php">Comunicati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notizie.php">Notizie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contatti</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Organizzazione</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Società</a>
              <a class="dropdown-item" href="#">Comitato e commissioni</a>
              <a class="dropdown-item" href="#">Storia e attività</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Area download</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link"><i class="fa fa-android"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"><i class="fa fa-apple"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"><i class="fa fa-facebook"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"><i class="fa fa-youtube"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>

    <div id="calendar"></div>

    <div class="modal fade" id="events-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Event</h3>
          </div>
          <div class="modal-body" style="height: 400px">
          </div>
          <div class="modal-footer">
            <a href="#" data-dismiss="modal" class="btn">Close</a>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/underscore.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
    <script type="text/javascript">
      (function($) {

        "use strict";

        var options = {
          events_source: 'eventi.php',
          view: 'month',
          tmpl_path: 'tmpls/',
          tmpl_cache: false,
          day: '2017-24-10',
          onAfterEventsLoad: function(events) {
            if (!events) {
              return;
            }
            var list = $('#eventlist');
            list.html('');

            $.each(events, function(key, val) {
              $(document.createElement('li'))
                .html('<a href="' + val.url + '">' + val.title + '</a>')
                .appendTo(list);
            });
          },
          onAfterViewLoad: function(view) {
            $('.page-header h3').text(this.getTitle());
            $('.btn-group button').removeClass('active');
            $('button[data-calendar-view="' + view + '"]').addClass('active');
          },
          classes: {
            months: {
              general: 'label'
            }
          }
        };

        var calendar = $('#calendar').calendar(options);

        $('.btn-group button[data-calendar-nav]').each(function() {
          var $this = $(this);
          $this.click(function() {
            calendar.navigate($this.data('calendar-nav'));
          });
        });

        $('.btn-group button[data-calendar-view]').each(function() {
          var $this = $(this);
          $this.click(function() {
            calendar.view($this.data('calendar-view'));
          });
        });

        $('#first_day').change(function() {
          var value = $(this).val();
          value = value.length ? parseInt(value) : null;
          calendar.setOptions({
            first_day: value
          });
          calendar.view();
        });

        $('#language').change(function() {
          calendar.setLanguage($(this).val());
          calendar.view();
        });

        $('#events-in-modal').change(function() {
          var val = $(this).is(':checked') ? $(this).val() : null;
          calendar.setOptions({
            modal: val
          });
        });
        $('#format-12-hours').change(function() {
          var val = $(this).is(':checked') ? true : false;
          calendar.setOptions({
            format12: val
          });
          calendar.view();
        });
        $('#show_wbn').change(function() {
          var val = $(this).is(':checked') ? true : false;
          calendar.setOptions({
            display_week_numbers: val
          });
          calendar.view();
        });
        $('#show_wb').change(function() {
          var val = $(this).is(':checked') ? true : false;
          calendar.setOptions({
            weekbox: val
          });
          calendar.view();
        });
        $('#events-modal .modal-header, #events-modal .modal-footer').click(function(e) {
          //e.preventDefault();
          //e.stopPropagation();
        });
      }(jQuery));
    </script>
  </main>


</body>

</html>
