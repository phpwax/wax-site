<?php
use Wax\Utilities\Session;

/**
 * Page Controller
 *
 * This is a default controller installed by PHP-WAX
 * Feel free to use this one, or just create your own using 'script/new_controller my_name'
 *
 * All you need to do in this controller is make one public method for each url.
 * Then make html tempalates in the 'view/page' directory.
 * The default 'index' is setup already.
 **/

class PageController extends ApplicationController {
  
  public function index() {

    $brewery = Brewery::where(["title"=>"Marstons"])->first();
    //$beer1 = Beer::create(["title"=>"My Beer 1","ABV"=>"5%"]);
    //$beer2 = Beer::create(["title"=>"My Beer 2","ABV"=>"5.2%"]);
    //$beer3 = Beer::create(["title"=>"My Beer 3","ABV"=>"6.5%"]);
    $beer1= new Beer(1);
    $beer2= new Beer(2);
    $beer3= new Beer(3);
    $brewery->beers = [$beer1, $beer2];
    $brewery->beers[] = $beer3;
    print_r($brewery->beers->rowset); exit;
    //$brewery->save();
    foreach($brewery->beers as $beer) {
      echo $beer->title." - ".$beer->ABV."<br>";
    }
    exit;  
  }
  
	
  	
}