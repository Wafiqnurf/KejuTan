<?php
include 'dbconn.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['katasandi'];

    $data = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND katasandi='$password'");

    if (mysqli_num_rows($data)) {
        header("location: admin.php?msg=Login Berhasil");
    } else {
        echo "login gagal";
    }
}
