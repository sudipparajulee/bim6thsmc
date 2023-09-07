<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="" method="POST" class="register-form">
        <h1>Register</h1>
        <input type="text" name="name" placeholder="Enter Name">
        <input type="text" name="address" placeholder="Enter Address">
        <input type="text" name="phone" placeholder="Enter Phone Number">
        <input type="email" name="email" placeholder="Enter Email Address">
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="register" value="Register">
        <p>Already have login? <a href="login.php">Login Here</a></p>
    </form>

</body>
</html>

<?php
if(isset($_POST['register']))
{
    include 'includes/db.php';
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (name,address,phone,email,password) VALUES ('$name','$address','$phone','$email','$password')";

    $result = mysqli_query($con,$query);

    if($result)
    {
        echo "<script>alert('User Registered Successfully'); window.location.href='login.php';</script>";
    }
    else
    {
        echo "<script>alert('User Registration Failed'); window.location.href='register.php';</script>";
    }
}
?>