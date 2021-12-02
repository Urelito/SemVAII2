<?php


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Forum" />
    <meta name="author" content="Aurel Kubacka" />
    <title>Urel's Forum</title>

    <!-- bootstrap 5 load -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- my css -->
    <link href="css/styles.css" rel="stylesheet" />

      <!-- javaScript -->
      <script src="script.js"></script>

      <!-- JQUERY load -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <body id="page-top">
    <!-- Header-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-1">
      <div class="container-fluid">
        <a class="navbar-brand logo" href="#">Urel's Forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#responsive-navbar" aria-controls="responsive-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="responsive-navbar" class="collapse navbar-collapse justify-content-center">
          <ul class="navbar-nav">
            <li><a class="nav-link px-4 fw-bolder" href="index.php">Domov</a></li>
            <li><a class="nav-link px-4 fw-bolder" href="forum.php">Fóra</a></li>
            <li><a class="nav-link px-4 fw-bolder" href="novinky.html">Novinky</a></li>
            <li><a class="nav-link px-4 fw-bolder" href="prihlasenie.html">Prihlásenie</a></li>
            <li><a class="nav-link px-4 fw-bolder" href="registracia.php">Registrácia</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Body -->
    <div class="body">
      <div class="container px-lg-5">
        <div class="row justify-content-center">
          <div class="container pb-5">
            <div class="row height d-flex justify-content-center align-items-center">
              <div class="col-md-8">
                <div class="search"><input type="text" class="form-control" placeholder="Vyhladávanie">
               <!--   <button class="btn btn-secondary">Hľadať</button> -->
                </div>
              </div>
            </div>
          </div>

          <div class="card-group">
            <div class="card">
              <img src="images/lieky.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Závislosti</h5>
                <p class="card-text">Posledný príspevok od uživateľa</p>
                <p class="card-text">Meno autora</p>
              </div>
              <a href="#" class="card-text more-info">Vstúpiť do diskusie</a>
              <div class="card-footer">
                <small class="text-muted">Posl. príspevok: 8.3.2021</small>
              </div>
            </div>

            <div class="card">
              <img src="images/zdravie.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Dusevné zdravie</h5>
                <p class="card-text">Lengvarský: Slovensko je v téme zlepšenia starostlivosti o duševné zdravie na začiatku</p>
                <p class="card-text">Ninka</p>
              </div>
              <a href="#" class="card-text more-info">Vstúpiť do diskusie</a>
              <div class="card-footer">
                <small class="text-muted">Posl. príspevok: 15.6.2021 10:18</small>
              </div>
            </div>
            <div class="card">
              <img src="images/ockovanie.jpg" class="img-fluid rounded-start" alt="...">
              <div class="card-body">
                <h5 class="card-title">Koronavírus</h5>
                <p class="card-text">Očkovanie proti chrípke a covidu možno aplikovať aj súčasne</p>
                <p class="card-text">Peter</p>
              </div>
              <a href="#" class="card-text more-info">Vstúpiť do diskusie</a>
              <div class="card-footer">
                <small class="text-muted">Posl. príspevok: dnes 9:15</small>
              </div>
            </div>
          </div>
        </div>
          <div class="row d-flex justify-content-center align-items-center">
              <div class="col-md-5">
                  <label>Zadajte názov:</label>
                  <input id = "post-name" type="text" class="form-control addPost" placeholder="Zadajte názov článku">
              </div>
          </div>
          <div class="row d-flex justify-content-center align-items-center">
              <div>
                  <label>Zadajte obsah:</label>
                  <textarea id = "post-text" type="text" class="form-control " placeholder="Zadajte text článku"> </textarea>
              </div>
          </div>
           <div class="row d-flex justify-content-center align-items-center">
               <div >
                   <button class="btn-css btn btn-secondary" onclick="addPost()">Vytvoriť príspevok</button>
                   <button class="btn-css btn btn-secondary" onclick="delPost()">Vymazať príspevok</button>
               </div>
           </div>

    </div> <!-- end div class body -->
  </body>
</html>