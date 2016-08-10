<?php

$u_name = $_POST["username"];
$mail = $_POST["Email"];
$no = $_POST["Contact"];
$sub = $_POST["subject"];
$inq = $_POST["inquiry"];

include config.php

//create connection
$conn= new mysqli($servername,$username,$password,$db);

// check connection

if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}

$sql=" INSERT INTO feedback(username,Email,Contact,subject,inquiry)   

VALUES('".$u_name."','".$mail."','".$no. "','".$sub."','".$inq."')";
if($conn->query($sql)==TRUE)
{
	echo Feedback submitted successfully;

}
else
{
	echo "Error: " . $sql . "<br>" . $conn->error;
}



?>