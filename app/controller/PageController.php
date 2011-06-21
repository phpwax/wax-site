<?php

/**
 * Page Controller
 *
 * This is a default controller installed by PHP-WAX
 * Feel free to use this one, or just create your own using 'script/new_controller my_name'
 *
 * All you need to do in this controller is make one public method for each url.
 * Then make html templates in the 'view/page' directory.
 * The default 'index' is setup already.
 **/

class PageController extends ApplicationController{
  
  public $per_page = 4;
  
  public function controller_global(){
		parent::controller_global();
		$this->cms();
		//$this->comment_form = new WaxForm(new CmsComment);
		//if($this->comment_form->save()) Session::add_message("Thanks!");
	}
  
  public function index() {}
  
}

?>