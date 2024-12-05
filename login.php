<?php
include 'config.php'; 

// Login page (when verifying user credentials)
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Form submitted.<br>";
    echo "Email: $email<br>";
    echo "Password: $password<br>";

    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        echo "User exists.<br>";

        $user = mysqli_fetch_assoc($result);

        if ($user) {
            echo "Fetched user: ";
            print_r($user); 
            echo "<br>";

            // Verify the entered password against the stored hash
            if (password_verify($password, $user['password'])) {
                echo "Password matches.<br>";
                session_start();
                $_SESSION['user'] = $user['name']; 
                $_SESSION['role'] = $user['type'] ?: 'User'; // Assign default role if not set

                if ($_SESSION['role'] === 'Admin') {
                    header('Location: admin_dashboard.php');
                    exit;
                } elseif ($_SESSION['role'] === 'User') {
                    header('Location: user_dashboard.php');
                    exit;
                } else {
                    echo "Invalid user role.<br>";
                }
            } else {
                echo "Password does not match.<br>";
            }
        } else {
            echo "Failed to fetch user data.<br>";
        }
    } else {
        echo "No user found with this email.<br>";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css"/>
</head>
<body>
    <h1 class="head-text">LALA'S LAUNDRY LOGIN PAGE</h1>
    <div class="form-container">
    <form action="" method="post">
    <h3>Login now</h3>

    <input type="email" name="email" required placeholder="Enter your email">
    
    <div class="password-field">
        <input type="password" name="password" id="password" required placeholder="Enter your password">
    </div>

    <input type="submit" name="submit" value="Login now" class="form-btn">

    <p>Don't have an account? <a href="register_form.php">Register now</a></p>

    <!-- Display error messages -->
    <?php
    if (isset($error)) {
        foreach ($error as $err) {
            echo "<p class='error'>$err</p>";
        }
    }
    ?>
</form>

   </div> 


   </script>
</body>
</html>
