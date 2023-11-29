<?php
class Production {
    protected $title;
    protected $language;
    protected $rating;

    function __construct(String $_title, String $_language, int $_rating) {
        $this->title = $_title;
        $this->language = $_language;
        // $this->rating = 0; 
        //$this->rating = $rating; // O cosi
        $this->setRating($_rating); // O cosi
    }

    public function setRating($_rating) {
    if (is_numeric($_rating) && $_rating >= 0) {
        $this->rating = intval($_rating);
    } else {
        $this->rating = null;
        echo('$_rating setting is not correct');
    }}

    public function getTitle()
    {
        return $this->title;
    }

    public function getLang()
    {
        return $this->language;
    }

    public function getRating()
    {
        return $this->rating;
    }
    
}