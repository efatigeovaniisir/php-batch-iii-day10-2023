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
        <p class="h2 fw-bold"> Data Makanan Papua <i class="bi bi-egg-fried"></i> </p>
    </div>
</div>

<div class="container">
<a href="index.php" class="btn btn-success">kembali</a>
    <div class=" card row">
        <div class="col-12">
            <h4 class="text-center fw-bold text-success">Tambah Data Makanan</h4>
            <form action="" method="post">
                <div class="mt-2">
                    <label for="nama" class="form-label">Nama Makanan</label>
                    <Input class="form-control" id="nama" type="text" name="nama_makanan"
                        placeholder="Masukan Nama Makanan" required>
                </div>

                <div class="mt-2">
                    <label for="number_format" class="form-label">Harga</label>
                    <Input class="form-control" id="harga" type="number" name="harga_makanan" placeholder="Masukan Harga"
                        required>
                </div>

                <div class="mt-2">
                    <label for="warung" class="form-label ">Warung</label>
                    <Input class="form-control" id="warung" type="text" name="warung" placeholder="Masukan Warung" required>
                </div>
                <div class="mt-2">
                    <label for="alamat" class="form-label">Alamat Warung</label>
                    <Input class="form-control" id="alamat" type="text" name="alamat" placeholder="Masukan Alamat" required>
                </div>
                <div class="mt-2">
                    <label for="pemilik" class="form-label">Pemilik Warung</label>
                    <Input class="form-control" id="pemilik" type="text" name="pemilik_warung" placeholder="Masukan Pemilik Warung" required>
                </div>

                <div class="mt-2">
                    <button type="submit" name="submit" class="btn btn-success m-2">Simpan</button>
                </div>
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