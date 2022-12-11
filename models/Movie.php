<?php

class Movie {

  public $title;
  public $release_date;
  public $vote_average;
  public $genre;
  public $description;
  public $poster;

  public static $type = 'movie';


  /** 
   * @param String movie title
   * @param String movie release date
   * @param Number movie vote average
   */
  public function __construct($_title, $_release_date, $_vote_average , $_genre , $_description , $_poster ){

    $this->title = $_title;
    $this->release_date = $_release_date;
    $this->vote_average = $_vote_average;
    $this->genre = $_genre;
    $this->description = $_description;
    $this->poster = $_poster; 

  }

  public function setPoster($_poster_path){

    $this->poster = trim($_poster_path);

  }

  public function getPoster(){

    $placeholder = 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png';

    if($this->poster){
      return $this->poster;
    }

    return $placeholder;

  }

  public function addGenre($_genre){

    $_genre = ucfirst(trim($_genre)); 
    
    if(!isset($this->genre)){
      $this->genre = $_genre;
    } else {
      $this->genre .= ", $_genre";
      
    }
  }



}