<?php

$fname = $_REQUEST['fname'];
$age = $_REQUEST['Age'];
$gender = $_REQUEST['gender'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$phone_number = $_REQUEST['phone_number'];

if (isset($_POST['btntest'])) {
    
    $host = "localhost";
    $user = "root";
    $pass ="";
    $db = "cardio";

    @$conn = mysqli_connect($host, $user, $pass, $db);
    $insert = "insert into form values('$fname', '$age', '$gender', '$email', '$password', '$phone_number')";
    mysqli_query($conn, $insert);

    if ($conn) {
        echo("<h1 style='color: green;'>Registeration Sucessfully</h1>");
    }
    else {
        echo("<h1 style='color: red;'>Registeration Failed</h1>");
    }
}

?>


