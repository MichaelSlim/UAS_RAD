<?php

	include_once('connection.php');
	$ID = $_GET['id'];
	$query = "DELETE FROM `user` WHERE `user`.`id` = ".$ID.";";
	mysqli_query($conn, $query);
	if ($query){
	$msg = "Data berhasil dihapuskan.";

	}else{
	$msg = "Data gagal dihapus.";
	}

  $response = array (
		'Status Data User' => $msg
  );
  
  echo json_encode($response);
?>