<?php

$db = mysqli_connect("localhost", "root", "", "logininfo");

if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}

$st_name = $_POST["name"];
$id = $_POST["id"];
$pass = $_POST["password"];

$sql = "SELECT PASS FROM reg_info WHERE ID = $id";
$result = $db->query($sql);

if($result=$pass){

    echo "successfull";
}
else{

    echo"error";
}

?>