<?php
require 'setting.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Komponen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="alert alert-info text-center">Data Komponen</div>

        <a href="add.php" class="btn btn-primary float-end">Tambah Komponen</a>

        <br> <br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Merek</th>
                    <th>Kapasitas</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($connect, "SELECT * FROM komponen_015");
                while ($isi = mysqli_fetch_object($query)) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $isi->merek; ?></td>
                        <td><?= $isi->kapasitas; ?></td>
                        <td><?= number_format($isi->harga); ?></td>
                        <td>
                            <a  onclick="return confirm('Anda Yakin ?')" 
                                href="delete.php?kode=<?php echo $isi->id; ?>" 
                                class="btn btn-danger btn-sm">Del
                            </a>

                            <a  href="edit.php?kode=<?php echo $isi->id; ?>" 
                                class="btn btn-warning btn-sm">Edit
                            </a>

                        </td>
                    </tr>
                <?php
                endwhile;
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>