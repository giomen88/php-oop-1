<?php 

class Movie
//variabili d'istanza
{
 public $title;
 public $year;
 public $genre;

// costruttore
 public function __construct($title, $year, $genre)
 {
    $this->title = $title;
    $this->year = $year;
    $this->genre = $genre;
 }

// metodi


// public function getTitle() 
// {
//     return $this->title;
// }
}


$movie = new Movie ('Matrix', 1999 , 'Fantascienza');

$movie2 = new Movie ('Non Ci Resta Che Piangere', 1984 , 'commedia');

$movies = [$movie, $movie2]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <?php foreach($movies as $movie) : ?>
                <h2><?= $movie->title ?></h2>
                <p><?= $movie->year ?></p>
                <p><?= $movie->genre ?></p>
            <?php endforeach; ?>    
        </li>
    </ul>
</body>
</html>