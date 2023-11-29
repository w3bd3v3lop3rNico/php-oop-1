<?php
require_once __DIR__ . '/Production.php';

class Movie extends Production 
{
    protected $profit;
    protected $duration;

    function __construct(String $_title, String $_language, int $_rating, float $_profit, int $_duration)
    {
        parent::__construct($_title, $_language, $_rating,);
        $this->setProfit($_profit);
        $this->setDuration($_duration);
    }

    public function setProfit($profit)
    {
        if (is_numeric($profit) && $profit >= 0) {
            $this->profit = floatval($profit);
        } else {
            $this->profit = null;
            echo('setting is not correct');
        }
    }

    public function setDuration($duration)
    {
        if (is_numeric($duration) && $duration >= 0) {
            $this->duration = intval($duration);
        } else {
            $this->duration = null;
            echo('setting is not correct');
        }
    }

    public function getProfit()
    {
        return $this->profit;
    }

    public function getDuration()
    {
        return $this->duration;
    }
}