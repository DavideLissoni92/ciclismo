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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Calendario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comunicati.php">Comunicati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Notizie</a>
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
    <div class="container mt-4">

      <ol class="breadcrumb">
        <li class="breadcrumb-item indigo-text"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Notizie</li>
      </ol>

      <div class="row">

        <div class="col-md-5">
        <a href="#">
            <img class="img-fluid z-depth-2" src="img/gianni.jpg" alt="">
        </a>
      </div>

        <div class="col-md-7">
          <h2 class="indigo-text">Granfondo internazionale Charly Gaul 2017</h2>
          <h5>10/10/2103</h5>
          <hr/>
          <span class="more">
            Lo scorso weekende sulle strade del Monte Bondone si è tenuta la granfondo internazionale Charly Gaul che ha visto sfidarsi centinaia di ciclisti. Ottima gara di Emma Delbono e Stefano Cecchini che vincono precedendo rispettivamente Simona Parente e Manuela
            Sonzogni ed Enrico Zen e Mauro Facci. Nella mediofondo vittoria di Davide Lombardi e della trentina Serena Gazzini. Secondo nella classifica mediofondo maschile Andrea Zamboni e terzo Andrea Pontalto. Nella classifica femminile dietro Serena
            Gazzini, Olga Cappiello e Deborah Rosa.
          </span>
        </div>

      </div>
      <hr class="indigo mt-4 mb-4"/>

      <div class="row mb-5">

        <div class="col-md-5">
        <a href="#">
            <img class="img-fluid z-depth-2" src="img/panchia.jpg" alt="">
        </a>
      </div>

        <div class="col-md-7">
          <h2 class="indigo-text">Granfondo internazionale Charly Gaul 2017</h2>
          <h5>10/10/2103</h5>
          <hr/>
          <span class="more">
            Lo scorso weekende sulle strade del Monte Bondone si è tenuta la granfondo internazionale Charly Gaul che ha visto sfidarsi centinaia di ciclisti. Ottima gara di Emma Delbono e Stefano Cecchini che vincono precedendo rispettivamente Simona Parente e Manuela
            Sonzogni ed Enrico Zen e Mauro Facci. Nella mediofondo vittoria di Davide Lombardi e della trentina Serena Gazzini. Secondo nella classifica mediofondo maschile Andrea Zamboni e terzo Andrea Pontalto. Nella classifica femminile dietro Serena
            Gazzini, Olga Cappiello e Deborah Rosa.
          </span>
        </div>

      </div>


    </div>
  </main>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script>
  $(document).ready(function() {
    var showChar = 400;
    var ellipsestext = "...";
    var moretext = "Espandi >";
    var lesstext = "Ridimensiona <";

    $('.more').each(function() {
        var content = $(this).html();
        if(content.length > showChar) {
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink indigo-text">' + moretext + '</a></span>';
            $(this).html(html);
        }
    });

    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
  </script>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
