<?php

$db = mysqli_connect("localhost", "root", "", "result_processing");

if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}


$Student_ID = $_POST["id"];


echo "Student_ID: ", $Student_ID."<br>";

$sql = "SELECT Course_Name ,Teacher_Initial,QUIZ,MID,FINAL,GRADE FROM result WHERE Student_ID= $Student_ID";
$result = $db->query($sql);

$row = $result->fetch_assoc();

if($row["id"]==$Student_ID){
    
    echo"successfull";
   

}

else{
    
    echo"error";

}
?>