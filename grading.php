<?php

$db = mysqli_connect("localhost", "root", "", "result_processing");

if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}


$course = $_POST["course"];
$id = $_POST["id"];
$quiz = $_POST["quiz"];
$mid = $_POST["mid"];
$final = $_POST["final"];


echo "Course: ", $course."<br>";
echo "Student ID: ", $id."<br>";
echo "quiz: ", $quiz."<br>";
echo "mid: ", $mid."<br>";
echo "final: ", $final."<br>";

$sql = "SELECT Course_Name FROM course WHERE  Student_ID = $id";
$result = $db->query($sql);


$row = $result->fetch_assoc();

echo "course name : ", $row["Course_Name"];

if($row["Course_Name"]==$course){
    
    

}

else{
    

}
?>