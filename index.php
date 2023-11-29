<?php 
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';

$split = new Movie("Split", "EN", 5, 278.5, 116);
// $split->title = "Split";
// $split->language = "EN";
// $split->setRating('5');
$theTrumanShow = new Movie("The Truman Show", "EN", 4, 264.1, 103);
// $theTrumanShow->setRating(5);
$watchOutWereMad = new Movie("Watch Out, We're Mad!", "EN", 4, 0.085, 90);
$grownUps = new Movie("Grown Ups", "EN", 3, 271.4, 102);
$grownUps2 = new Movie("Grown Ups 2", "EN", 3, 246.9, 100);


$peakyBlinders = new Serie("Peaky Blinders", "EN", 5, 6);
$theWitcher = new Serie("The Witcher", "EN", 4, 3);
$theOffice = new Serie("The Office", "EN", 4, 9);
$moneyHeist = new Serie("Money Heist", "SP", 4, 3);
$blackMirror = new Serie("Black Mirror", "EN", 4, 6);

$productions = [
    $split,
    $theTrumanShow,
    $watchOutWereMad,

    $peakyBlinders,
    $theWitcher,
    $theOffice,
    $moneyHeist,
    $blackMirror


];




var_dump($split);

var_dump($movies);



// $watchOutWereMad = $movies[2];
// $watchOutWereMad->setRating(7);

// $split = $movies[0];
// $split->setRating(5);

// $theTrumanShow = $movies[1];
// $theTrumanShow->setRating(6);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-1</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <section class="container">
            <h1 class="title">Movies</h1>
        </section>
    </header>
    <main>
        <section class="container">
            <ul>
                <?php foreach($movies as $movie) { ?>
                    <li>
                        <?php echo $movie->getProfit() ?>
                    </li>
                <?php } ?>
                
            </ul>
        </section>
    </main>
</body>
</html>