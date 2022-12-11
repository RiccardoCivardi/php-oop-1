<?php 

require_once 'models/Movie.php';

$movie_json = './data/movie.json';
$movie_str = file_get_contents($movie_json);
$movies = json_decode($movie_str);
$moviesList = [];

foreach ($movies as $movie) {
  $moviesList[] = new Movie(
    $movie->title, 
    $movie->releaseDate, 
    $movie->voteAverage, 
    $movie->genre, 
    $movie->description, 
    $movie->poster
  );
}

// var_dump($moviesList);


// if (!empty($_POST['title']) && !empty($_POST['release-date']) && !empty($_GET['vote-average']) && !empty($_GET['genre']) && ) {
//   $newMovie = new Movie($_GET['title'], $_GET['year'], $_GET['genre']);

//   $moviesList[$newMovie->title] = $newMovie;

//   if (!empty($_GET['poster'])) {
//       $moviesList[$newMovie->title]->setPoster($_GET['poster']);
//   }

//   if (!empty($_GET['wikipedia'])) {
//       $moviesList[$newMovie->title]->setwikiPage($_GET['wikipedia']);
//   }

//   file_put_contents($db, json_encode($moviesList, JSON_PRETTY_PRINT));
// }

if(!empty($_POST)){

  $newMovie = new Movie(
    $_POST['title'], 
    $_POST['release-date'], 
    $_POST['vote-average'], 
    $_POST['genre'], 
    $_POST['description'], 
    $_POST['poster']
  );

  $moviesList[$newMovie->title] = $newMovie;

  file_put_contents($movie_json, json_encode($moviesList, JSON_PRETTY_PRINT));
}