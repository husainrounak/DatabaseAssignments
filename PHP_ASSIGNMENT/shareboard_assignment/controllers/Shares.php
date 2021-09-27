<?php
class Shares extends Controller{
	protected function Index(){
		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->Index(), true);
	}

	protected function add(){
		If(!isset($_SESSION["is_logged_in"])){
			header('location: '.ROOT_URL.'shares');
		}
		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->add(), true);
	}
}