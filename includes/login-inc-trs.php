<?php

if (isset($_POST['submit'])) {
    require 'database.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty ($password)) {
        header("Location: ../transportations.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email= ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../transportations.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $passCheck = password_verify($password, $row['password']);
                if ($passCheck == false){
                    header("Location: ../transportations.php?error=wrongpass");
                    exit();
                } else if ($passCheck == true) {
                    session_start();
                    $_SESSION['sessionid'] = $row['id'] ;
                    $_SESSION['sessionemail'] = $row['email'] ;
                    header("Location: ../transportations.php?success=loggedin");
                    exit();
                } else {
                    header("Location: ../transportations.php?error=wrongpass");
                    exit();
                }
            } else {
                header("Location: ../transportations.php?error=noUser");
                exit();
            }
        }
    }


} else {
    header("Location: ../transportations.php?error=accessfornbidden");
    exit();
}

?>