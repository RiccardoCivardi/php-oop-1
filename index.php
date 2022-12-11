<?php

require_once 'getmovies.php';

/*
Create un file index.php in cui:
 - è definita una classe 'Movie'
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
*/

// $movie_1 = new Movie('Una notte al museo - La vendetta di Kahmunrah', '09/12/2022', 8.4, ' animazione ');
// $movie_2 = new Movie('Avatar', '14/12/2022', 9.7);

// $movie_1->addGenre('  commedia  ');
// $movie_1->addGenre('  famiglia  ');
// $movie_1->addGenre('  fantasy  ');

// $movie_1 ->setPoster('https://www.cinemalumiere.it/wp-content/uploads/2022/11/Avatar-acqua-Poster_Ita.jpg');


// var_dump($movie_1);
// var_dump($movie_2);

// echo $movie_1->getPoster();

var_dump($_POST);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap Css - Js -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- Font awesome -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous'/>

  <!-- Main style -->
  <link rel="stylesheet" href="css/style.css">

  <title>OOP Movie</title>

</head>
<body>

  <div id="app">

    <header class="container-lg">
      <div class="row">

        <div class="container-fluid d-flex justify-content-between align-items-center">
          <h1 class="my-5 text-primary display-1">OOP - MOVIES CARD</h1>
          <i class="fa-solid fa-plus fs-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#movieModal"></i>
        </div>

        <div class="modal" id="movieModal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

              <div class="modal-header d-flex justify-content-between align-items-center px-3">
                <h2 class="text-primary mb-0">ADD A NEW MOVIE</h2>
                <button type="button" class="btn-close fs-4 border border-dark rounded-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body w-75 m-auto">

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                  <input type="text" class="form-control mb-3" placeholder="Title" name="title">
                  <input type="text" class="form-control mb-3" placeholder="Release date" name="release-date">
                  <input type="number" min="1" max="10" class="form-control mb-3" placeholder="Vote average" name="vote-average">
                  <input type="text" class="form-control mb-3" placeholder="Genre" name="genre">
                  <input type="text-area" class="form-control mb-3" placeholder="Description..." name="description">
                  <input type="text" class="form-control mb-3" placeholder="Poster path" name="poster">

                  <button type="submit" class="btn btn-primary">ADD MOVIE</button>
                  <button type="reset" class="btn btn-secondary">RESET</button>

                </form>

              </div>
              
            </div>
          </div>
        </div>

      </div>
    </header> 
    
    <main class="container-lg">
      <div class="row row-cols-4">
        
        <?php foreach($moviesList as $movie): ?>

          <div class="col mb-5">
            <div class="card h-100">
              <img src="<?php echo $movie->getPoster() ?>" class="card-img-top thumb" alt="<?php echo $movie->title ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $movie->title ?></h5>
                <p class="card-text">Uscita: <?php echo $movie->release_date ?></p>
                <p class="card-text">Valutazione: <?php echo $movie->vote_average ?></p>
                <p class="card-text"><?php echo $movie->genre ?></p>
                <p class="card-text description"><?php echo $movie->description ?></p>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
    
      </div>

    </main>

  </div>
  
</body>
</html>