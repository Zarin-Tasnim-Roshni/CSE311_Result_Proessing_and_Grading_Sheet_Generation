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

$sql = "INSERT INTO reg_info(Student_Name,ID, PASS) VALUES('$st_name',$id, '$pass')";

echo "Student Name: ", $st_name."<br>";
echo "Student ID: ", $id."<br>";
echo "Student Pass: ", $pass."<br>";


if(mysqli_query($db, $sql)){

    echo "Information Inserted";
}
else{

    echo "error" . mysqli_error($db);
}


?>