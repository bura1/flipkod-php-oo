<?php

class Circle {

	public $radius;

	function __construct($radius) 
	{
		$this->radius = $radius;
	}

	function get_area() 
	{
		return number_format(pi() * $this->radius * $this->radius, 2);
	}

	function get_circumference() 
	{
		return number_format(2 * pi() * $this->radius, 2);
	}

}