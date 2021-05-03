<?php
  
include "connection.php";

$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];

$sql = "INSERT INTO `user` (`name`, `age`, `email`) VALUES ('".$name."', '".$age."', '".$email."');";


$query = mysqli_query($conn, $sql);
if ($query){
	$msg = "User sukses ditambah.";

}else{
	$msg = "Gagal menambahkan user.";
}

  $response = array (
		'Data user' => $msg
  );
  
  echo json_encode($response);
?>