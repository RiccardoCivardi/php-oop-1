<?php

class Movie {

  public $title;
  public $release_date;
  public $vote_average;
  public $description;
  public $poster;
  public $genre;

  public static $type = 'movie';


  /** 
   * @param String movie title
   * @param String movie release date
   * @param Number movie vote average
   * @param String movie description
   * @param Genre movie genre
   */
  public function __construct($_title, $_release_date, $_vote_average, $_description = null, Genre $_genre = null){

    $this->title = $_title;
    $this->release_date = $_release_date;
    $this->vote_average = $_vote_average;
    $this->description = $_description;
    $this->genre = $_genre;

  }

  public function setPoster($_poster_path){

    $this->poster = $_poster_path;

  }

  // public function getPoster(){

  // }



}