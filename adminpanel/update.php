<?php

require '../inc/function.php';

$id = $_GET["id"];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = '../index.php'
        </script>
";
    } else {
        echo "
        <script>
            alert('Data gagal ubah');
            document.location.href = '../index.php'
        </script>
";
    }
}

$performers = query("SELECT * FROM performers WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/admin.css?<?= time() ?>">
    <title>Update Panel</title>
</head>

<body class="d-flex justify-content-center align-items-center w-100 vh-100">

    <div class="container border border-1 mt-2">

        <h2 class="text-center mt-3">UPDATE PERFORMERS</h2>

        <div class="row mt-4 p-2">
            <form class="d-flex justify-content-center align-items-center flex-column gap-2" action="" method="post">
                <input type="hidden" name="id" value="<?= $performers["id"]; ?>">
                <div class="col-12">
                    <input type="text" class="form-control" name="nama_performers" placeholder="Input Name Performers" required value="<?= $performers["nama_performers"] ?>">
                </div>
                <div class="col-12">
                    <input type="file" class="form-control" name="gambar_performers" placeholder="Input Pict Performers" required value="<?= $performers["gambar_performers"] ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-danger mb-3 w-100">Update Performers</button>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>




</html>