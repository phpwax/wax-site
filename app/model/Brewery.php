<?php
use Wax\Model\Model;

/* New Model */

class Brewery extends Model {
	
  
  public function setup() {
    $this->define("title", "CharField", array());
    $this->define("beers", "HasManyField", array("target_model"=>"Beer"));


  }
  
  
  
}

