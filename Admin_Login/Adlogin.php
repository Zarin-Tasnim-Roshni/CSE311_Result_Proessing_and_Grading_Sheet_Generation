<?php

$db = mysqli_connect("localhost", "root", "", "result_processing");

if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}

$Teacher_Initial = $_POST["initial"];
$PW = $_POST["password"];

echo "Teacher_Initial: ", $Teacher_Initial."<br>";
echo "Teacher pw: ", $PW."<br>";

$sql = "SELECT Teacher_Initial FROM teacher_info WHERE Teacher_Initial = $Teacher_Initial";
$result = $db->query($sql);

$row = $result->fetch_assoc();

if($row["initial"]==$Teacher_Initial){
    
    echo"successfull";

}

else{
    
    echo"error";

}
?>