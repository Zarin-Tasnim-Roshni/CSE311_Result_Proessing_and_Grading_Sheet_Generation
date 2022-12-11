<?php

$db = mysqli_connect("localhost", "root", "", "logininfo");

if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}


/*$id = $_POST["ID"];
$pass = $_POST["PASS"];

$sql = "INSERT INTO log_info(ID, PASS) VALUES($id, '$pass')";

echo "Student ID: ", $id."<br>";
echo "Student Pass: ", $pass."<br>";


if(mysqli_query($db, $sql)){

    echo "Information Inserted";
}
else{

    echo "error" . mysqli_error($db);
}


?>
*/