<?php
require 'setting.php';

if (isset($_GET['kode'])) {

    $kode = $_GET['kode'];

    $query = mysqli_query($connect, "DELETE FROM komponen_015 where id='$kode'");

    if ($query) {
        header('location: home.php');
    } else {
        echo 'Error => ' . mysqli_error($connect);
    }

} else {
    header('location: home.php');
}
