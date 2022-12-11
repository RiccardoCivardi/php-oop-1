<?php 

class Genre {

  public $main_genre;
  // public $genre_2;
  // public $genre_3;
  // public $genre_4;


  /**
   * @param String movie main genre
   */
  public function __construct($_main_genre){

    $this->main_genre = $_main_genre;

  }

  // public function setGenre($_genre_2 = null, $_genre_3 = null, $_genre_4 = null){

  //   $this->genre_2 = $_genre_2;
  //   $this->genre_3 = $_genre_3;
  //   $this->genre_4 = $_genre_4;

  // }

}