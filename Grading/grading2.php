<?php

session_start();

$course = $_SESSION["t_coursename"];


$db = mysqli_connect("localhost", "root", "", "result_processing");

$id = $_POST["id"];
$quiz = $_POST["quiz"];
$mid = $_POST["mid"];
$final = $_POST["final"];


$sql = "SELECT Course_Name FROM result WHERE  Student_ID = $id AND Course_Name = '$course'";
$result = $db->query($sql);


$row = $result->fetch_assoc();


if($row["Course_Name"]==$course){


    $result=$quiz+$mid+$final;

    switch($result) {
        case $result >= 80 and $result <= 100:

            echo "<h1>"."Your submitted grade is A. Please press back to submit more grades"."</h1>";
            
            $grade = 'A';

            $sql= "UPDATE result SET QUIZ = $quiz WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET MID = $mid WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET FINAL = $final WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET GRADE = '$grade' WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);

            break;


        case $result >= 70 and $result <= 79:

            echo "<h1>"."Your submitted grade is B. Please press back to submit more grades"."</h1>";
            $grade = 'B';

            $sql= "UPDATE result SET QUIZ = $quiz WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET MID = $mid WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET FINAL = $final WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET GRADE = '$grade' WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);
            
            break;

        case $result >= 60 and $result <= 69:

            echo "<h1>"."Your submitted grade is C. Please press back to submit more grades"."</h1>";
            $grade = 'C';
            
            $sql= "UPDATE result SET QUIZ = $quiz WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET MID = $mid WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET FINAL = $final WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);

            $sql= "UPDATE result SET GRADE = '$grade' WHERE Student_ID = $id AND Course_Name = '$course'";
            mysqli_query($db, $sql);

            break;

        case $result >= 50 and $result <= 59:

            echo "<h1>"."Your submitted grade is D. Please press back to submit more grades"."</h1>";
                $grade = 'D';
                
                $sql= "UPDATE result SET QUIZ = $quiz WHERE Student_ID = $id AND Course_Name = '$course'";
                mysqli_query($db, $sql);
    
                $sql= "UPDATE result SET MID = $mid WHERE Student_ID = $id AND Course_Name = '$course'";
                mysqli_query($db, $sql);
    
                $sql= "UPDATE result SET FINAL = $final WHERE Student_ID = $id AND Course_Name = '$course'";
                mysqli_query($db, $sql);
    
                $sql= "UPDATE result SET GRADE = '$grade' WHERE Student_ID = $id AND Course_Name = '$course'";
                mysqli_query($db, $sql);

                break;
    

                case $result >= 0 and $result <= 49:

                    echo "<h1>"."Your submitted grade is F. Please press back to submit more grades"."</h1>";
                        $grade = 'F';
                        
                        $sql= "UPDATE result SET QUIZ = $quiz WHERE Student_ID = $id AND Course_Name = '$course'";
                        mysqli_query($db, $sql);
            
                        $sql= "UPDATE result SET MID = $mid WHERE Student_ID = $id AND Course_Name = '$course'";
                        mysqli_query($db, $sql);
            
                        $sql= "UPDATE result SET FINAL = $final WHERE Student_ID = $id AND Course_Name = '$course'";
                        mysqli_query($db, $sql);
            
                        $sql= "UPDATE result SET GRADE = '$grade' WHERE Student_ID = $id AND Course_Name = '$course'";
                        mysqli_query($db, $sql);
    
                      break;
                    default:
        echo 'something else';
        }

    }
else{
    
 echo "error";
 
}

?>