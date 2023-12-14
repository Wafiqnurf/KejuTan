<?php
include "dbconn.php";

if (isset($_POST['submit'])) {
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    move_uploaded_file($file_tmp, 'foto/' . $foto);

    $sql = "INSERT INTO `menu` SET
                                    nama = '$nama',
                                    harga = '$harga',
                                    foto = '$foto'

    ";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: admin.php?msg=Data Baru Berhasil Ditambahkan");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        PHP Completed CRUD Application
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Menu</h3>
            <p class="text-muted">Lengkapi Data</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form enctype="multipart/form-data" action="" method="POST" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nama Menu</label>
                        <input type="text" class="form-control" name="nama" placeholder="">
                    </div>
                </div>

                <div class="mb-3">
                    <div class="col">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" placeholder="">
                    </div>
                </div>

                <div class="mb-3">
                    <div class="col">
                        <label class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto" placeholder="">
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Simpan Data</button>
                    <a href="admin.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
