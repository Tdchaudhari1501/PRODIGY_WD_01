<?php
include_once 'dbConfig.php';

$name = $_POST["name"];
$number = $_POST["number"];
$email = $_POST["email"];
$details=$_POST["details"];

if (!$db) die("Could not connected " . mysqli_connect_error());
$stmt = "insert into blog_us(name,number,email,details) values('$name','$number','$email','$details')";
if ($db->query($stmt) === true){
  echo "<script> alert('Your Suggestion Sent Successfully ');window.location.href='contact.php'; </script>";
}
else echo "<script>alert('Something went wrong') </script>" . $db->error;

?>