<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "result_processing");


$id = $_POST["id"];
$pass = $_POST["password"];


if(empty($id) || empty($pass)){

    echo"error";
    echo '<script>alert("Username or Password Incorrect")</script>';

    header("Refresh: 0.5; URL=http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/admin_login/adlogin.html");

}
else{

$sql = "SELECT PASS FROM admin WHERE Admin_ID = '$id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();

if($row["PASS"]==$pass){
    
    echo"successfull";

    $_SESSION["id"] = $id;

    header("Location: http://localhost/phpmyadmin/index.php?route=/database/structure&db=result_processing");
    

}
else{
    
    echo"error";
    echo '<script>alert("Username or Password Incorrect")</script>';

    header("Refresh: 0.5; URL=http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/admin_login/adlogin.html");

}
}

?>