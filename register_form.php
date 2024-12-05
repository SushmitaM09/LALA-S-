<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $pass = $_POST['password'] ?? '';
    $cpass = $_POST['cpassword'] ?? '';

    $select = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    // if (mysqli_num_rows($result) > 0) {
    //     $error[] = 'User already exists!';
    // } else {
    //     if ($pass !== $cpass) {
    //         $error[] = 'Passwords do not match!';
    //     } else {

    //         $insert = "INSERT INTO user(name, email, password) VALUES ('$name', '$email', '$pass')";
    //         mysqli_query($conn, $insert);
    
    
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
    
        // Check if role is selected, if not assign 'User' by default
        $role = isset($_POST['role']) ? $_POST['role'] : 'User'; 
    
        // Insert user with the hashed password and default role
        $query = "INSERT INTO user (email, password, type) VALUES ('$email', '$hashed_password', '$role')";
        $result = mysqli_query($conn, $query);
    }
    header('Location: login.php');
}

?>



<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="register.css" />
</head>

<body>
    <h1 class="head-text">LALA'S LAUNDRY Register PAGE</h1>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register now</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };

            ?>



            <input type="text" name="name" required placeholder="Enter your name">
            <input type="email" name="email" required placeholder="Enter your email">
<!-- <select name="role" id="role">

<option value="User">User</option>
<option value="Admin">Admin</option> -->

</select>


            <div class="password-field">

                <input type="text" name="password" id="password" required placeholder="Enter your password">

            </div>
            <div class="password-field">

                <input type="text" name="cpassword" id="password" required placeholder="Comfirm your password">
            </div>


            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </form>
    </div>

</body>

</html>