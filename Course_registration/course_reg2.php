<?php

$db = mysqli_connect("localhost", "root", "", "result_processing");

 session_start();

// Print the session variable
echo "Hello," . $_SESSION['ID'];

if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}







$st_course = $_POST["Category"];
$secret = $_POST['secret'];
//$id = $_POST["id"];

$sql = "INSERT INTO result(Course_Name) VALUES('$st_course')";

echo "Student course: ", $st_course."<br>";
echo "ID: ", $secret."<br>";


if(mysqli_query($db, $sql)){



    //echo "Information Inserted". "<br>". "<br>";
    //$sql="INSERT INTO result(Student_ID) VALUES($id)";
    //mysqli_query($db, $sql);

    // echo "Information Inserted". "<br>". "<br>";

    //header("Location: http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/Course_Registration/course_reg.php");
    
    exit;


}
else{

    echo "error" . mysqli_error($db);
}


?>