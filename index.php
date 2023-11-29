<?php 
require_once __DIR__ . '/Models/Production.php';
// classe


$split = new Production("Split", "EN");
$split->title = "Split";
$split->language = "EN";
$split->setRating('5');

var_dump($split);


$theTrumanShow = new Production("The Truman Show", "EN");
$theTrumanShow->setRating(5);
var_dump($theTrumanShow);

$movies = [
    new Production("Split", "EN"),
    new Production("The Truman Show", "EN"),
    new Production("Watch Out, We're Mad!", "EN")
];

$watchOutWereMad = $movies[2];
$watchOutWereMad->setRating(7);

$split = $movies[0];
$split->setRating(5);

$theTrumanShow = $movies[1];
$theTrumanShow->setRating(6);




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
                        <?php echo($movie->title . ' - ' . $movie->language . ' - ' . $movie->getRating() ) ?>
                    </li>
                <?php } ?>
                
            </ul>
        </section>
    </main>
    
</body>
</html>