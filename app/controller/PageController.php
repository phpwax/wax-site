<?php


class PageController extends ApplicationController {
  
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