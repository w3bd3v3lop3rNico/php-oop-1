<?php 
// classe
class Production {
    public $title;
    public $language;
    private $rating;

    function __construct(String $_title, String $_language) {
        $this->title = $_title;
        $this->language = $_language;
        $this->rating = 0; 
        //$this->rating = $rating; // O cosi
        //$this->setRating($rating); // O cosi
    }

    public function setRating($_rating) {
    if (is_numeric($_rating) && $_rating >= 0) {
        $this->rating = intval($_rating);
    } else {
        $this->rating = null;
        echo('$_rating setting is not correct');
    }}

    public function getRating()
    {
        return $this->rating;
    }
    
}

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