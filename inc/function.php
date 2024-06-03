<?php 

$conn = mysqli_connect("localhost", "root", "", "tubes");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $gambar = htmlspecialchars($data["gambar_performers"]);
    $nama = htmlspecialchars($data["nama_performers"]);

    $query = "INSERT INTO performers
                VALUES
                ('0', '$gambar', '$nama')
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM performers WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $gambar = htmlspecialchars($data["gambar_performers"]);
    $nama = htmlspecialchars($data["nama_performers"]);

    $query = "UPDATE performers SET
                gambar_performers ='$gambar',
                nama_performers = '$nama'
              WHERE id = $id  
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM performers
                WHERE
              nama_performers LIKE '%$keyword%'
            ";
    return query($query);
}

?>