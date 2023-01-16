<?php 

// Store database connection in $con variable
$con = mysqli_connect("localhost", "root", "", "db_progreviews");

// Store received input from form in local variables
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Store SQL query into $sql
$sql = "INSERT INTO `tbl_contact` (`fldName`, `fldEmail`, `fldMessage`) VALUES ('$name', '$email', '$message');";

// Query database and store response in $rs
$rs = mysqli_query($con, $sql);

header('Location: contact.html');

?>