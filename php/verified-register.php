<?php
require 'connectdb.php';

//function resgister
function registrasi($data) {
        global $connect;

        $username = htmlspecialchars(stripslashes($data['username']));
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);
        $confirm = htmlspecialchars($data['confirm']);

// cek username ada atau tidak 
    $result = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('Akun telah terdaftar!');
                window.location = 'register.php';
            </script>";

            return false;
        }

    //cek konfirmasi password
        if ( $password !==  $confirm) {
            echo " <script>
                alert ('Konfirmasi password tidak sesuai!');
                window.location = '../guest/auth-register.php';
            </script>";

            return false;
        }

    //enkripsi password
    $password = password_hash($password, PASSWORD_ARGON2ID);

    //insert

    mysqli_query($connect, "INSERT INTO user ( username, password, email, token, roles)  VALUES ('$username', '$password', '$email', '', 'user')");

    return mysqli_affected_rows($connect);
}

?>