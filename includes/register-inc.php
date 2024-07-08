<?php

if (isset($_POST['submit'])) {
    // Add database connection
    require 'database.php';

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPass = $_POST['passwordCo'];

    if (empty($fullname) || empty($username) || empty($email) || empty($password) || empty($confirmPass)) {
        header("Location: ../touristguide project.php?error=emptyfields");
        exit();
    } else if (!preg_match("/^[a-zA-Z]*/", $fullname)) {
        header ("Location: ../touristguide project.php?error=invalidfirstname");
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        header ("Location: ../touristguide project.php?error=invalidlastname");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email= '$email' OR username= '$username'";
        $stmt = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header ("Location: ../touristguide project.php?error=sqlerror");
            exit();
        } else {
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($result);

            if ($user) {
                if ($user['username'] === $username){
                    header ("Location: ../touristguide project.php?error=usernamealreadyexists");
                    exit();
                }
                else if ($user['email'] === $email){
                    header ("Location: ../touristguide project.php?error=emailalreadyexists");
                    exit();
                }
            } else {
                $sql = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header ("Location: ../touristguide project.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPass);
                    mysqli_stmt_execute($stmt);
                    header ("Location: ../touristguide project.php?success=registered");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}


?>