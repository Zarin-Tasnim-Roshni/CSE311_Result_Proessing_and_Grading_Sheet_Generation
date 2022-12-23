<?php
session_start();

$t_course = $_POST["Category"];
$_SESSION["t_coursename"] = $t_course;

header("Refresh: 1; URL=http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/grading/grading.php");


?>