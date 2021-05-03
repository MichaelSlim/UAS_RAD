<?php

include "connection.php";

$sql = "SELECT * FROM user";
$query = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($query)){

    $item[] = array (
        'name'=>$data["name"],
        'age'=>$data["age"],
        'email'=>$data["email"],
    );
  }

  $response = array (
        'user' => $item
  );

  echo json_encode($response);

?>