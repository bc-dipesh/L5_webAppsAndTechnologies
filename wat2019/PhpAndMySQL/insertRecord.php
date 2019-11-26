<?php
//Make connection to database
include 'connection.php';
//(a)Gather from $_POST[]all the data submitted and store in variables
if (isset($_POST['submitForm'])) {
    $fname = $_POST['FirstName'];
    $sname = $_POST['SecondName'];
    $email = $_POST['Email'];
    $passwd = $_POST['Password'];
    $gender = $_POST['Gender'];
    $age = $_POST['Age'];
}
//(b)Construct INSERT query using variables holding data gathered
//Temporarily echo $query for debugging purposes
$query="INSERT INTO Customer (FirstName, LastName, Email, Password, Gender, Age) VALUES ('$fname', '$sname', '$email', '$passwd', '$gender', '$age')";
//run $query
mysqli_query($connection, $query);
?>