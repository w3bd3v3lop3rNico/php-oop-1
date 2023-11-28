<?php 
// classe
class Production {
    public $title;
    public $language;
    // public $rating;

    function __construct($_rating) {
        $this->rating = $_rating;
    }
    
}

$split = new Production(5);
$split->title = "Split";
$split->language = "EN";
$split->rating = 5;
var_dump($split);
var_dump($split->rating);

$theTrumanShow = new Production(5);
var_dump($theTrumanShow);
echo($theTrumanShow->rating);
?>