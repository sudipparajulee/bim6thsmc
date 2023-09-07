<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="" method="POST" class="login-form">
        <h1>Login</h1>
        <input type="email" name="email" placeholder="Enter Email Address">
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="login" value="Login">
        <p>Don't have login? <a href="register.php">Register Here</a></p>
    </form>

</body>
</html>

<?php
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    include 'includes/db.php';

    $qry = "SELECT * FROM users WHERE email='$email' and password='$password'";

    $result = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['isloggedin'] = "yes";
        header('location: admin/dashboard.php');
    }
    else
    {
        echo "invalid login id or password";
    }
}

?>