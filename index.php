<?php 

class Movie
{
public $title;
public $year;
public $genre;

    public function __construct($title, $year, $genre)
    {
    $this->title = $title;
    $this->year = $year;
    $this->genre = $genre;
    }
}


?>