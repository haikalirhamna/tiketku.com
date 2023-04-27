<?php

require 'verified-register.php';
require 'connectdb.php';

    if (isset ($_POST['signup'])) {

        if (registrasi($_POST) > 0 ) {
            echo "<script>
                alert ('Account berhasil ditambah');
                window.location = '../guest/auth-login.php';
            </script>";

            exit();
        }
        else {
            echo mysqli_error($connect);

        }
    }
?>