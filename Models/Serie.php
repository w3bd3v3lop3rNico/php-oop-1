<?php
require_once __DIR__ . '/Production.php';

class Serie extends Production 
{
    protected $season;

    function __construct(String $_title, String $_language, int $_rating, int $_season)
    {
        parent::__construct($_title, $_language, $_rating,);
        $this->setSeason($_season);
    }

    public function setSeason($season)
    {
        if (is_numeric($season) && $season >= 0) {
            $this->season = intval($season);
        } else {
            $this->season = null;
            echo('setting is not correct');
        }
    }

    public function getSeason()
    {
        return $this->season;
    }
}