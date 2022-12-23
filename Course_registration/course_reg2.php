<?php

$db = mysqli_connect("localhost", "root", "", "result_processing");

 session_start();

$x = $_SESSION['ID'];


if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}


$st_course = $_POST["Category"];
$secret = $_POST['secret'];


$sql = "SELECT Student_ID FROM result WHERE Course_Name IN ('$st_course')";
$result = $db->query($sql);
$row = $result->fetch_assoc();

    
if($secret==$row['Student_ID']){

    echo"Same Courses Selected <br>";

    sleep(3);
    header("Location:http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/Course_Registration/course_reg.php");

} else{

    

    $sql = "INSERT INTO result(Student_ID,Course_Name) VALUES($secret,'$st_course')";
    
    if(mysqli_query($db, $sql)){

    $sql = "SELECT COUNT(Course_Name) FROM result WHERE Student_ID = $x";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();


    if($row['COUNT(Course_Name)']>=5){

        sleep(3);
        
        header("Location:http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/Course_Registration/reg_complete.html");


    }
    else{
        
    header("Location:http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/Course_Registration/course_reg.php");

    }
    
}
else{

    echo "error" . mysqli_error($db);
}

}

?>