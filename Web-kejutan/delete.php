<?php
include "dbconn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `menu` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php?msg=Record Delete Success");
} else {
    echo "Failed: " . mysqli_error($conn);
}
