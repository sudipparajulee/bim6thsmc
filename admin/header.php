<?php session_start(); 
if(!isset($_SESSION['isloggedin']))
{
    header('location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
   <div class="wrapper">
        <div class="navbar">
            <img src="https://bitmapitsolution.com/images/logo/logo.png" alt="">
            <ul class="menu">
                <li><a href="">Dashboard</a></li>
                <li><a href="">Categories</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">Orders</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="content">

