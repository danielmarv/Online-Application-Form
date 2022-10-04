<?php
session_start();
require 'dbcon.php';

if (isset($_POST['create'])) {
    $surname = mysqli_real_escape_string($con, $_POST['surname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $othername = mysqli_real_escape_string($con, $_POST['othername']);
    $nin = mysqli_real_escape_string($con, $_POST['nin']);
    $term = mysqli_real_escape_string($con, $_POST['term']);
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $combination = mysqli_real_escape_string($con, $_POST['combination']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $bord = mysqli_real_escape_string($con, $_POST['bord']);
    $report = mysqli_real_escape_string($con, $_POST['report']);
    $reason = mysqli_real_escape_string($con, $_POST['reason']);
    $relationship = mysqli_real_escape_string($con, $_POST['relatinship']);
    $parentname = mysqli_real_escape_string($con, $_POST['parentname']);
    $pnin = mysqli_real_escape_string($con, $_POST['pnin']);
    $pcon1 = mysqli_real_escape_string($con, $_POST['pcon1']);
    $pcon2 = mysqli_real_escape_string($con, $_POST['pcon2']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $query = "INSERT INTO reg_students (surname, lastname,othername, nin, term, class, 
        combination, gender, bord, report, reason, relationship, parentname, pnin, 
        pcon1, pcon2, email) VALUES('$surname', '$lastname', '$othername', '$nin', '$term', 
        '$class', '$combination', '$gender', '$bord', '$report', '$reason', '$relationship', '$parentname', '$pnin', 
        '$pcon1', '$pcon2', '$email')";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        
        $_SESSION['message'] = "Saved Successfully";
        header("Location: reg.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Not Successfully";
        header("Location: reg.php");
        exit(0);
    }
}

?>