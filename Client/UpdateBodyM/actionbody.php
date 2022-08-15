<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
session_start();

$height = $_POST['height'];
$cweight = $_POST['cweight'];
$tweight = $_POST['tweight'];
$lthigh = $_POST['lthigh'];
$rthigh = $_POST['rthigh'];
$waist = $_POST['waist'];
$chest = $_POST['chest'];
$hips = $_POST['hips'];


$id = $_SESSION["id"];

$submit = "true";

$query2 = "update body_measurements set height = '" . $height . "', current_weight = '" . $cweight . "',right_thigh = '" . $rthigh . "',left_thigh = '" . $lthigh . "',hips = '" . $hips . "', waist = '" . $waist . "',target_weight = '" . $tweight . "' where client_id = '" . $id . "'";
mysqli_query($conn, $query2);

header("Location: updatebodym.php?submit=$submit");