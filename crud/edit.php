<?php
require 'setting.php';

if (isset($_GET['kode'])) {

    $kode = $_GET['kode'];

    $query = mysqli_query($connect, "SELECT * FROM komponen_015 WHERE id='$kode'");

    $isi = mysqli_fetch_object($query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="alert alert-info">Edit Data</div>

        <div class="row">

            <div class="col-md-6">

                <div class="card card-body">

                    <?php

                    if (isset($_POST['simpan'])) {

                        $id = $_POST['txtid'];
                        $merek = $_POST['txtmerek'];
                        $kapasitas = $_POST['txtkapasitas'];
                        $harga = $_POST['txtharga'];

                        $query = mysqli_query(
                            $connect,
                            "UPDATE komponen_015 SET merek='$merek', kapasitas='$kapasitas', harga='$harga'
                            WHERE id='$id'"
                        );

                        if ($query) {
                            header('location: home.php');
                        } else {
                            echo 'Error => ' . mysqli_error($connect);
                        }
                    }
                    ?>

                    <form action="edit.php" method="post">
                        <div class="mb-3">
                            <label for="">Merek</label>
                            <input type="hidden" name="txtid" value="<?php echo $isi->id; ?>">
                            <input type="text" name="txtmerek" class="form-control" value="<?php echo $isi->merek ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Kapasitas</label>
                            <input type="text" name="txtkapasitas" class="form-control" value="<?php echo $isi->kapasitas ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input type="text" name="txtharga" class="form-control" value="<?php echo $isi->harga ?>">
                        </div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        <a href="home.php" class="btn btn-warning">Kembali</a>

                    </form>

                </div>

            </div>

        </div>

    </div>
</body>

</html>