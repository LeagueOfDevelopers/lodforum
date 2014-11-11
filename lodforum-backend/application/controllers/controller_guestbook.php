<?php
class Controller_guestbook extends Controller{
	function __construct(){
		$this->model = new Model_Guestbook();
		$this->view = new View();
	}

	function action_index(){
		if(isset($_POST["email"])){
			$this->model->send_data(new GuestBook($_POST["name"], $_POST["email"], $_POST["text"]));
		}
		$data = $this->model->get_data();
		$this->view->generate('guestbook_view.php', 'template_view.php', $data);
		
	}
}