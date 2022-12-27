<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>

<body>
    <h2>Belajar PHP</h2>

    <?php
    echo "test coding php";

    echo "<hr>";

    $umur = 24;

    // var_dump($umur);
    // echo "Umur anda : " . $umur;

    ?>

    <h1>umur anda : <?php echo $umur; ?></h1>
    <hr>
    <?php

    $hoby = [1 => 'Badminton', 2 => 'Futsal'];

    echo $hoby[1];

    echo "<hr>";

    if ($umur > 30) {

        echo 'Sudah harus nikah';
    } else {

        echo 'masih jomblo';
    }

    echo '<hr>';

    for ($i = 1; $i <= 10; $i++) {

        echo $i . '<br>';

    }

    ?>

</body>

</html>