<?php

	include "connection.php";
	$ID = $_GET['id'];
	
	$name = $_POST["name"];
	$age = $_POST["age"];
	$email = $_POST["email"];
	
	$query = "UPDATE `user` SET `name` = '".$name."', `age` = '".$age."', `email` = '".$email."' WHERE `user`.`id` = ".$ID.";";		
	mysqli_query($conn, $query);
	if ($query){
	$msg = "Berhasil mengupdate data user.";

	}else{
	$msg = "Gagal mengupdate data user.";
	}

  $response = array (
		'Status user' => $msg
  );
  
  echo json_encode($response);
?>