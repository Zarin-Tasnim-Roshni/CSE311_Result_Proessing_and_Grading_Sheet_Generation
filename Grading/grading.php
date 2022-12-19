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

$sql = "SELECT Course_Name FROM result WHERE  Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
$result = $db->query($sql);


$row = $result->fetch_assoc();

echo "course name : ", $row["Course_Name"];


if($row["Course_Name"]==$course){


    $result=$quiz+$mid+$final;

    switch($result) {
        case $result >= 70 and $result <= 100:

            echo 'Your Grade is A';
            $grade = 'A';

            $sql= "UPDATE result SET QUIZ = $quiz WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET MID = $mid WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET FINAL = $final WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET GRADE = '$grade' WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);

            break;

        case $result >= 60 and $result <= 69:

            echo 'Your Grade is B+';
            $grade = 'B';

            $sql= "UPDATE result SET QUIZ = $quiz WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET MID = $mid WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET FINAL = $final WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET GRADE = '$grade' WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);
            
            break;

        case $result >= 59 and $result <= 60:

            echo 'Your Grade is B';
            $grade = 'C';
            
            $sql= "UPDATE result SET QUIZ = $quiz WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET MID = $mid WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET FINAL = $final WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET GRADE = '$grade' WHERE Student_ID = $id AND Course_Name = '$course' AND Teacher_Initial='mdar'";
            mysqli_query($db, $sql);

            
        default:
        echo 'something else';
        }

    }
else{
    
 echo "error";
 
}

?>