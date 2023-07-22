<?php
 require_once('conn.php');

 $id_makanan = $_GET["id_makanan"];

 if( hapus($id_makanan) > 0){
    echo"
        <script>
        alert('Data Berhasil dihapus!');
        window.location.href = 'index.php';
        </script>
        ";
 } else {
    echo"
        <script>
        alert('Data Gagal dihapus');
        window.location.href = 'index.php';
        </script>
        ";
 }

?>