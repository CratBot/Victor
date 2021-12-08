<?php
//including the database connection file
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'students';

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {	
	$fullname = $_POST['fullname'];
	$studentphone = $_POST['studentphone'];
	$studentemail = $_POST['studentemail'];
    $studentregno = $_POST['studentregno'];
    $course =  $_POST['course'];
    $parentname =$_POST['parentname'];
    $parentphone = $_POST['parentphone'];
		
	
    $sql = mysqli_query($conn, "INSERT INTO student_details (studentname,phone,email,regno,course,parentname,parentphone) VALUES('$fullname','$studentphone','$studentemail','$studentregno','$course','$parentname','$parentphone')");
	if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }	
		
}
echo ("<SCRIPT LANGUAGE='JavaScript'>            

   window.location.href='index.html';
          </SCRIPT>");
?>
