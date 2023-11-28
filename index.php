<?php 
// classe
class Production {
    public $title;
    public $language;
    public $rating;

    function __construct(String $_title, String $_language) {
        $this->title = $_title;
        $this->language = $_language;
        // $this->rating = $_rating;
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
// var_dump($split);
// echo($split->rating);

$theTrumanShow = new Production("The Truman Show", "EN");
$theTrumanShow->setRating(5);
// var_dump($theTrumanShow);
// echo($theTrumanShow->getRating());

$WatchOutWereMad->setRating(7)

$movies = [
    $split,
    $theTrumanShow,
    new Production("Watch Out, We're Mad!", "EN");
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-1</title>
</head>
<body>
    <header>
        <section class="container">

        </section>
    </header>
    
</body>
</html>