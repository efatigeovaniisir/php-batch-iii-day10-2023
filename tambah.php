<?php
    require_once('conn.php');


    if(isset($_POST['submit']))
    {
        if( tambah($_POST) > 0 ){

        echo"
        <script>
        alert('Data Berhasil ditambah');
        window.location.href = 'index.php';
        </script>
        ";
        } else {
            echo"
        <script>
        alert('Data Gagal ditambah');
        window.location.href = 'tambah.php';
        </script>";
        }
    }

    
?>


<!-- HEADER -->
<?php 
     include_once('include/header.php')
?>
<div class="row text-center">
    <div class="col-12 p-5">
        <p class="h4"> Data Makanan Papua <i class="bi bi-egg-fried"></i> </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Tambah Data Makanan</h1>
            <form action="" method="post">
                <div class="p-3">
                <label for="nama">Nama Makanan</label>
                <Input id="nama" type="text" name="nama_makanan" placeholder="Masukan Nama Makanan" required>
                </div>
                <br><br>
                <label for="number_format">Harga</label>
                <Input id="harga" type="number" name="harga" placeholder="Masukan Harga" required>

                <br><br>
                <label for="warung">Warung</label>
                <Input id="warung" type="text" name="warung" placeholder="Masukan Warung" required>

                <br><br>
                <label for="alamat">Alamat Warung</label>
                <Input id="alamat" type="text" name="alamat" placeholder="Masukan Alamat" required>
                <br><br>
                <label for="pemilik">Pemilik Warung</label>
                <Input id="pemilik" type="text" name="pemilik_warung" placeholder="Masukan Pemilik Warung" required>


                <br><br><br>
                <button type="submit" name="submit">Simpan</button>
            </form>






        </div>
    </div>
</div>
</div>


<!-- CONTENT END -->

<!-- footer -->
<?php 
     include_once('include/footer.php')
    ?>