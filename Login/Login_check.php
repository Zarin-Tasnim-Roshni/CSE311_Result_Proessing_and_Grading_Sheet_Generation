<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "result_processing");


$id = $_POST["id"];
$pass = $_POST["password"];


if(empty($id) || empty($pass)){

    echo"error";
    echo '<script>alert("Username or Password Incorrect")</script>';

    header("Refresh: 0.5; URL=http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/login/login_test.html");

}
else{

$sql = "SELECT password FROM student_info WHERE Student_ID = $id";
$result = $db->query($sql);
$row = $result->fetch_assoc();

if($row["password"]==$pass){
    
    echo"successfull";

    $_SESSION["id"] = $id;

    header("Location: http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/profile_pages/student_home.php");
    

}
else{
    
    echo"error";
    echo '<script>alert("Username or Password Incorrect")</script>';

    header("Refresh: 0.5; URL=http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/login/login_test.html");

}
}

?>