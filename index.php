<?php

class Movie
{
    public $title;
    public $genre;
    public $year;
    public $cast;

    function __construct($_title)
    {
        $this->title = $_title;
    }

    public function insertActors($_cast)
    {
        $this->cast[] = $_cast;
    }
}

$movie1 = new Movie("Iron man");
$movie1->genre = "Comics, sci-fi";
$movie1->year = 2008;
$movie1->insertActors("Robert downey jr");



$movie2 = new Movie("The big sick");

$movie2->genre = "Romance, comedy";
$movie2->year = 2017;
$movie2->insertActors("Kumail nanjiani");
$movie2->insertActors("Zoe kazan");


$movies = [];
$movies[] = $movie1;
$movies[] = $movie2;
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
    <?php
    foreach ($movies as $movie) { ?>
        <div>
            <h2><?php echo $movie->title ?></h2>
            <p><?php echo $movie->genre ?></p>
            <p><?php echo $movie->year ?></p>
            <ul>
                <?php
                foreach ($movie->cast as $actor) { ?>
                    <li><?php echo $actor ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</body>

</html>