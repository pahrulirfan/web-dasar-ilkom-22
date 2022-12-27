<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="alert alert-info">Tambah Data</div>

        <div class="row">

            <div class="col-md-6">

                <div class="card card-body">

                    <form action="add.php" method="post">
                        <div class="mb-3">
                            <label for="">Merek</label>
                            <input type="text" name="txtmerek" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Kapasitas</label>
                            <input type="text" name="txtkapasitas" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input type="text" name="txtharga" class="form-control">
                        </div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </form>

                </div>

            </div>

        </div>

    </div>
</body>

</html>