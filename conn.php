<?php

    $serverName = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'day10';


    $conn = mysqli_connect($serverName, $username, $password, $database);

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows =[];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }


function tambah($data) {
    global $conn;
    $nama_makanan = htmlspecialchars($data['nama_makanan']);
    $harga_makanan = htmlspecialchars($data['harga_makanan']);
    $warung = htmlspecialchars($data['warung']);
    $alamat = htmlspecialchars($data['alamat']);
    $pemilik_warung = htmlspecialchars($data['pemilik_warung']);

    $query ="INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `harga_makanan`, `warung`, `alamat`, `pemilik_warung`) VALUES (NULL,'$nama_makanan','$harga_makanan','$warung','$alamat','$pemilik_warung');";
    $add = mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function ubah($data) {
    $id_makanan = $data["id_makanan"]; 
    global $conn;
    $nama_makanan = htmlspecialchars($data['nama_makanan']);
    $harga_makanan = htmlspecialchars($data['harga_makanan']);
    $warung = htmlspecialchars($data['warung']);
    $alamat = htmlspecialchars($data['alamat']);
    $pemilik_warung = htmlspecialchars($data['pemilik_warung']);

    $query ="UPDATE `makanan` SET (nama_makanan = `$nama_makanan`, harga_makanan = `$harga_makanan`, warung = `$warung`, alamat = `$alamat`, pemiliki_warung = `$pemilik_warung` WHERE id_makanan = `$id_makanan`)";
    $add = mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}


function hapus($id_makanan) {
    global $conn;
    mysqli_query($conn, "DELETE FROM makanan WHERE id_makanan = $id_makanan");
    return mysqli_affected_rows($conn);
}
?>

