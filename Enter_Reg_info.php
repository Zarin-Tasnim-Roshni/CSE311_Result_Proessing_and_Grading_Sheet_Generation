<?php

$db = mysqli_connect("localhost", "root", "", "result_processing");

if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}

$st_name = $_POST["name"];
$id = $_POST["id"];
$st_email = $_POST["email"];
$st_gender = $_POST["gender"];
$dob = $_POST["dob"];
$st_course = $_POST["course_name"];
$pass = $_POST["password"];

$sql = "INSERT INTO student_info(StudentName,StudentEmail,Gender,DOB,Course_Name,password,Student_ID) VALUES('$st_name','$st_email','$st_gender', $dob, '$st_course','$pass',$id)";

echo "Student Name: ", $st_name."<br>";
echo "Student ID: ", $id."<br>";
echo "Student Pass: ", $pass."<br>";
echo "Student email: ", $st_email."<br>";
echo "Student gender: ", $st_gender."<br>";
echo "Student course: ", $st_course."<br>";
echo "Student dob: ", $dob."<br>";


if(mysqli_query($db, $sql)){

    echo "Information Inserted". "<br>". "<br>";
    $sql="INSERT INTO course(Course_Name,Student_ID) VALUES('$st_course',$id)";
    mysqli_query($db, $sql);

     echo "Information Inserted". "<br>". "<br>";

}
else{

    echo "error" . mysqli_error($db);
}


?>