<?php

if (isset($_POST['submit'])) {
    // Add database connection
    require 'database.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPass = $_POST['passwordCo'];

    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmPass)) {
        header("Location: ../history.php?error=emptyfields");
        exit();
    } else if (!preg_match("/^[a-zA-Z]*/", $firstname)) {
        header ("Location: ../history.php?error=invalidfirstname");
        exit();
    } else if (!preg_match("/^[a-zA-Z]*/", $lastname)) {
        header ("Location: ../history.php?error=invalidlastname");
        exit();
    } else {
        $sql = "SELECT email FROM users WHERE email= ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header ("Location: ../history.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0 ) {
                header ("Location: ../history.php?error=accountalreadyexists");
                exit();
            } else {
                $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header ("Location: ../history.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPass);
                    mysqli_stmt_execute($stmt);
                    header ("Location: ../history.php?success=registered");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}


?>