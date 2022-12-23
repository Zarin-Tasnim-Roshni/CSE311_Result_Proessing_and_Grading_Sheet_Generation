<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "result_processing");


$initial = $_POST["initial"];
$pass = $_POST["password"];


if(empty($initial) || empty($pass)){

    echo"error";
    echo '<script>alert("Username or Password Incorrect")</script>';

    header("Refresh: 0.5; URL=http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/login/login_test.html");

}
else{

$sql = "SELECT PW FROM teacher_info WHERE Teacher_Initial = '$initial'";
$result = $db->query($sql);
$row = $result->fetch_assoc();

if($row["PW"]==$pass){
    
    echo"successfull";

    $_SESSION["initial"] = $initial;

    header("Location: http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/profile_pages/teacher_home.php");
    

}
else{
    
    echo"error";
    echo '<script>alert("Username or Password Incorrect")</script>';

    header("Refresh: 0.5; URL=http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/Teacher_login/Ttest.html");

}
}

?>