<?php
// db configuration
require 'connectdb.php';

// upload file value

$title = ($_POST['title']);
$location = ($_POST['location']);
$price = ($_POST['price']);

// upload image path

$targetDir = "../upload_files/";
$fileName = basename($_FILES["img"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if (isset($_POST['upload'])) {

        // allow file type
        $allowtype = array('jpeg', 'jpg', 'png', 'gif');

        if (!in_array($fileType, $allowtype)) {
            echo "<script>
                alert('File yang anda masukkan salah');
                window.location = '../auth/file-uploder.php';
            </script>";

            return false;
        } else {
            move_uploaded_file($_FILES['img']['tmp_name'], $targetFilePath);
        }

        mysqli_query($connect, "INSERT INTO products ( title, location, price, image_name, upload_at)  VALUES ('$title', '$location', '$price', '$fileName', NOW())");

        echo "<script>
                alert('Product berhasil di upload');
                window.location = '../auth/file-uploder.php';
            </script>";
    }
?>