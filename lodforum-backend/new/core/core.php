<?php
include_once("mysql_config.php");
class DB extends mysqli{
		
	function ConnectTo(){
		parent::__construct(SQLADDR, SQLUSER, SQLPWD, SQLDB);
		$this->query("SET NAMES utf8");
	}

	function get_topics($forum_part_id, $page_id){
		$start = ($page_id -1) * 10;
		echo $start;
		$query_string = "SELECT id, topic_name, create_date, author_id from forum_topics WHERE parent_id=$forum_part_id AND is_important=0 ORDER BY create_date LIMIT $start, 10";
		$result = $this->query($query_string);
		while($out = mysqli_fetch_array($result)){
		
			$output[] = $out;
		}
		return $output;
	}

	function get_important_topics($forum_part_id){
		$query_string = "SELECT id, topic_name, create_id, author_id from forum_topics WHERE parent_id=$forum_part_id AND is_important=1 ORDER BY create_date";
		$result = $this->query($query_string);
		while($out = mysqli_fetch_array($result)){
		
			$output[] = $out;
		}
		return $output;
	}

	function get_messages($topic_id, $page_id){
		$start = ($page_id -1) * 20;
		$query_string = "SELECT id, user_id, author_id, text, datetime from forum_messages WHERE topic_id=$topic_id ORDER BY datetime LIMIT $start, 20";
		$result = $this->query($query_string);
		while($out = mysqli_fetch_array($result)){
		
			$output[] = $out;
		}
		return $output;
	}

	function count_messages($topic_id){
		$query_string = "SELECT COUNT() FROM forum_messages WHERE topic_id=$topic_id";
		$result = $this->query($query_string);
		$output = mysqli_fetch_array($result);
		return $output;
	}

	function send_message($topic_id, $message_body){

	}

	function create_topic($data, $forum_part_id){

	}


}