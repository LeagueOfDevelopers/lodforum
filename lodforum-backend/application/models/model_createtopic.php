<?php
class Model_Createtopic extends Model{

	public function get_data(){
	}
	public function send_data($t, $part_name){
		$this->ConnectDB();
		$this->query("INSERT INTO forum_topics VALUES(\" \",\"".$part_name."\",\"".$t["name"]."\",\"".$t["desc"]."\", \"0 \", \" \", \"".$_SESSION["user_id"] ."\" )");
	}
}