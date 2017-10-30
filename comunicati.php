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

  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

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

    <div class="container mt-4">

      <ol class="breadcrumb">
        <li class="breadcrumb-item indigo-text"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Comunicati</li>
      </ol>

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 mt-4">

          <div class="input-group md-form form-sm form-2 pl-0">
            <input id="search" class="form-control my-0 py-1 px-3 grey-border" type="text" placeholder="Cerca comunicato" aria-label="Cerca comunicato">
            <span class="input-group-addon waves-effect grey lighten-3" id="basic-addon1"><a><i class="fa fa-search text-grey" aria-hidden="true"></i></a></span>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!--Table-->
      <table id="table" class="table table-hover">
        <tbody>

          <tr>
            <th>1</th>
            <td>
              <div class="row">
                <div class="col-md-11">
                  <h2 class="indigo-text">Granfondo internazionale Charly Gaul 2017</h2>
                </div>
                <div class="col-md-1">
                  <a href=""><i class="fa fa-2x fa-download indigo-text" aria-hidden="true"></i></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h5>10/10/2103</h5>
                  <hr/>
                  <span class="more">
                Lo scorso weekende sulle strade del Monte Bondone si è tenuta la granfondo internazionale Charly Gaul che ha visto sfidarsi centinaia di ciclisti. Ottima gara di Emma Delbono e Stefano Cecchini che vincono precedendo rispettivamente Simona Parente e Manuela
                Sonzogni ed Enrico Zen e Mauro Facci. Nella mediofondo vittoria di Davide Lombardi e della trentina Serena Gazzini. Secondo nella classifica mediofondo maschile Andrea Zamboni e terzo Andrea Pontalto. Nella classifica femminile dietro Serena
                Gazzini, Olga Cappiello e Deborah Rosa.
              </span>
                </div>
              </div>
            </td>
          </tr>


          <tr>
            <th>2</th>
            <td>Jacob</td>
          </tr>

          <tr>
            <th>3</th>
            <td>Jacob</td>
          </tr>

        </tbody>
      </table>

    </div>
  </main>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

  <script>
  $("#search").keyup(function(){
         var searchText = $(this).val().toLowerCase();
         // Show only matching TR, hide rest of them
         $.each($("#table tbody tr"), function() {
             if($(this).text().toLowerCase().indexOf(searchText) === -1)
                $(this).hide();
             else
                $(this).show();
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
