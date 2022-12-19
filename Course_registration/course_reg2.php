<?php

$db = mysqli_connect("localhost", "root", "", "result_processing");
 $i=0;


if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}

$st_course = $_POST["Category"];
//$id = $_POST["id"];

$sql = "INSERT INTO result(Course_Name) VALUES('$st_course')";

echo "Student course: ", $st_course."<br>";


if(mysqli_query($db, $sql)){



    //echo "Information Inserted". "<br>". "<br>";
    //$sql="INSERT INTO result(Student_ID) VALUES($id)";
    //mysqli_query($db, $sql);

    // echo "Information Inserted". "<br>". "<br>";

    header("Location: http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/Course_Registration/course_reg.php");
    

    $i++;

    echo $i;
    exit;


}
else{

    echo "error" . mysqli_error($db);
}


?>