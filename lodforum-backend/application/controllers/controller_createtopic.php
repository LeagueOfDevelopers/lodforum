<?php
class Controller_createtopic extends Controller{
	public 
	function __construct(){
		$this->model = new Model_Createtopic();
		$this->view = new View();
	}

	function action_index($part_name){
		if(isset($_POST["name"])){
			$this->model->send_data($_POST, $part_name);
		}
		$this->view->generate('createtopic_view.php', 'template_view.php', $data);
	}
}