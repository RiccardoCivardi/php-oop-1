<?php

require_once 'models/Genre.php';
require_once 'models/Movie.php';

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

$avatar = new Movie('Avatar', '14/12/2022', 9.7, 'Jake Sully vive con la sua nuova famiglia sul pianeta Pandora. Ma quando una vecchia, familiare minaccia torna ad affacciarsi per terminare quel che era stato iniziato un tempo, Jake dovrà nuovamente collaborare con Meytiri e l\'esercito dei Na\'vi per proteggere il loro incredibile pianeta. Jake e Naytiri saranno pertanto costretti a lasciare la loro casa ed esplorare varie regioni di Pandora.', new Genre('Fantascienza'));

var_dump($avatar);

$she_said = new Movie('She Said', '17/11/2022', 7.9, 'Le giornaliste del New York Times Megan Twohey e Jodi Kantor raccontano una delle storie più importanti di una generazione, una storia che ha contribuito a lanciare il movimento #MeToo e a infrangere decenni di silenzio sul tema della violenza sessuale a Hollywood.');

var_dump($she_said);

$avatar->setPoster('https://www.cinemalumiere.it/wp-content/uploads/2022/11/Avatar-acqua-Poster_Ita.jpg');

var_dump($avatar);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP Movie</title>
</head>
<body>

  
  
</body>
</html>