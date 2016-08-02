<?php
	
	include_once("conn.php");
	$table = $_GET['table'];
	$id = $_GET['id'];
	$url = $_GET['url'];
	if(isset($_GET['typ'])){
		$typ = $_GET['typ'];
		$url = $url.'&typ='.$typ;
	}
	
	$sql = "DELETE FROM $table WHERE id = '".$id."'";
	mysql_query($sql) or die(mysql_error());
	header('Location: '.$url);
	
?>