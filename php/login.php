<?PHP
session_start();

if (isset($_SESSION['login'])) {
    header('location: ../auth/home.php');
    exit();
}

require 'connectdb.php';

    if (isset($_POST['login'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");

        if (mysqli_num_rows($result) === 1 ) {

            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row["password"])) {

                $_SESSION['login'] = $row['id'];
                $_SESSION['roles'] = $row['roles'];

                if ($row['roles'] == 'admin') {
                    header('location: ../auth/dashboard.php');
                } else {
                    header('location: ../auth/home.php');
                }

                header('location: ../index.php');
                exit();
            }
        }else {
            header('location: ../guest/auth-login.php');
        }
    }
?>