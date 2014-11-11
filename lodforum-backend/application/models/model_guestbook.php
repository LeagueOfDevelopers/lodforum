<?php
class GuestBook 
{ 
private $name; 
private $email; 
private $msg; 

public function __construct($_name, $_email, $_msg) 
{ 
	$this->name = $_name; 
	$this->email = $_email; 
	$this->msg = $_msg; 
} 

public function getName() 
{ 
	return $this->name; 
} 
public function getEmail() 
{ 
	return $this->email; 
} 
public function getMsg() 
{ 
	return $this->msg; 
} 
} 
class Model_Guestbook extends Model{

	public function get_data(){
		$this->ConnectDB();
		// считываем данные запросом и возвращаем результат ввиде массива экземпляров GuestBook
		$result = $this->query("SELECT * FROM board");
		$obj_array = array();
		while($out = mysqli_fetch_array($result)){
			$obj_array[] = new GuestBook($out["name"], $out["email"], $out["msg"]);
		}
		$data = $obj_array;
		return $data;
	}
	public function send_data($obj){
		$this->ConnectDB();
		$this->query("INSERT INTO board VALUES(\"".$obj->getName()."\",\"".$obj->getEmail()."\",\"".$obj->getMsg()."\")");
	}
}