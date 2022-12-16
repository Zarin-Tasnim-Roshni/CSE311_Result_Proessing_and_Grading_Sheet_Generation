<?php

$db = mysqli_connect("localhost", "root", "", "result_processing");

if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}

$id = $_POST["id"];
$pass = $_POST["password"];

echo "Student ID: ", $id."<br>";
echo "Student pass: ", $pass."<br>";

$sql = "SELECT password FROM student_info WHERE Student_ID = $id";
$result = $db->query($sql);

$row = $result->fetch_assoc();

if($row["password"]==$pass){
    
    echo"successfull";

}

else{
    
    echo"error";

}
?>