<?php
use Wax\Model\Model;

/* New Model */

class Beer extends Model {
	  
  public function setup() {
    $this->define("title", "CharField", array());
    $this->define("ABV", "CharField", array());
    $this->define("brewery", "ForeignKey", array("target_model"=>"Brewery"));


  }
  
  
  
}

