<?php

$db = mysqli_connect("localhost", "root", "", "logininfo");

if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}

$id = $_POST["id"];
$pass = $_POST["pass"];

echo "Student ID: ", $id."<br>";
echo "Student pass: ", $pass."<br>";

$sql = "SELECT PASS FROM reg_info WHERE ID = $id";
$result = $db->query($sql);

$row = $result->fetch_assoc();

if($row["PASS"]==$pass){
    
    echo"successfull";

}

else{
    
    echo"error";

}
?>