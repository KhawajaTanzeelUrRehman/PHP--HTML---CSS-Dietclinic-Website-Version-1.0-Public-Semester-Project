<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
$email = $_POST['email'];
$password = $_POST['password'];
$designation = $_POST['designation'];
$dg = "dg";
$invalid = "invalid";
if ($designation == "designation") {

    header("Location: log_in_page.php?dg=$dg");
} else if ($designation == "admin") {
    $query = "SELECT * FROM login where email = '" . $email . "' and password = '" . $password . "' and type = 'admin'";
    $result = mysqli_query($conn, $query);
    if (!empty(mysqli_fetch_assoc($result))) {





        $qu = "SELECT admin_id , name FROM login join admin using (login_id) where email = '" . $email . "' and password = '" . $password . "' and type = 'admin'";
        $ru = mysqli_query($conn, $qu);
        $rowu = mysqli_fetch_array($ru);

        session_start();
        $_SESSION["id"] = $rowu[0];
        $_SESSION["name"] = $rowu[1];
        header("Location: ../admin/admin_home/admin_home2.php");
    } else {
        header("Location: log_in_page.php?in=$invalid");
    }
} else if ($designation == "client") {
    $query = "SELECT * FROM login where email = '" . $email . "' and password = '" . $password . "' and type = 'client'";
    $result = mysqli_query($conn, $query);
    if (!empty(mysqli_fetch_assoc($result))) {
        header("Location: ../Client/Client_home/index.php");


        $qu1 = "SELECT client_id , first_name FROM login join client using (login_id) where email = '" . $email . "' and password = '" . $password . "' and type = 'client'";
        $ru1 = mysqli_query($conn, $qu1);
        $rowu1 = mysqli_fetch_array($ru1);

        session_start();
        $_SESSION["id"] = $rowu1[0];
        $_SESSION["name"] = $rowu1[1];
    } else {
        header("Location: log_in_page.php?in=$invalid");
    }
}