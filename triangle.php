<?php

class Triangle {

    public $a;
    public $b;
    public $c;
    public $height;

    function __construct($a, $b, $c, $height)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->height = $height;
    }

    function get_area()
    {
        if ($this->check_if_possible()) {
            return ($this->a * $this->height) / 2;
        } else {
            return "Triangle is not possible";
        }
        
    }

    function get_circumference()
    {
        if ($this->check_if_possible()) {
            return $this->a + $this->b + $this->c;
        } else {
            return "Triangle is not possible";
        }    
    }

    private function check_if_possible() 
    {
        if ($this->a + $this->b <= $this->c ||
                $this->a + $this->c <= $this->b ||
                $this->b + $this->c <= $this->a ) {
            return false;
        } else {
            return true;
        }
    }

}