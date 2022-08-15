<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
session_start();
$food = $_POST['food'];
$cmed = $_POST['cmed'];
$fooda = $_POST['fooda'];
$diseases = $_POST['diseases'];

$id = $_SESSION["id"];

$submit = "true";

$query2 = "update medical_diagnosis set food_choices = '" . $food . "', current_medication = '" . $cmed . "',food_allergies = '" . $fooda . "',diseases = '" . $diseases . "' where client_id = '" . $id . "'";
mysqli_query($conn, $query2);

header("Location: updatediagnosis.php?submit=$submit");