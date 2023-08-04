<?php
    require_once('conn.php');
    
    $id_makanan = $_GET["id_makanan"];
    $makanan = query("SELECT * FROM makanan WHERE id_makanan = $id_makanan")[0];
    

    // $data = mysqli_query($conn, $query); 

    if(isset($_POST['submit']))
    {
        if( ubah($_POST) > 0 ){

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
     include_once('include/header.php');
?>
<div class="row text-center">
    <div class="col-12 p-5">
        <p class="h4"> Data Makanan Papua <i class="bi bi-egg-fried"></i> </p>
    </div>
</div>

<div class="container">
<a href="index.php" class="btn btn-warning mb-2">kembali</a>
    <div class="card bg-primary text-light">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Ubah Data Makanan</h1>
                <form action="" method="post">
                <div class="mb-2">
                        <label for="id-makanan" class="form-label">id makanan</label>
                        <Input type="hidden" class="form-control" id="number" name="id_makanan" value="<?= $makanan['id_makanan']; ?>"
                         required>
                    </div>
                    <div class="mb-2">
                        <label for="nama" class="form-label">Nama Makanan</label>
                        <Input type="text" class="form-control" id="nama" name="nama_makanan" value="<?= $makanan['nama_makanan']; ?>"
                         required>
                    </div>
                    <div class="mb-2">
                        <label for="nama" class="form-label">Harga</label>
                        <Input type="number" class="form-control" id="harga" name="harga_makanan" value="<?= $makanan['harga_makanan']; ?>"
                        required>
                    </div>

                    <div class="mb-2">
                        <label for="nama" class="form-label">Warung</label>
                        <Input class="form-control" id="warung" type="text" name="warung" value="<?= $makanan['warung']; ?>" required>
                    </div>

                    <div class="mb-2">
                        <label for="nama" class="form-label">Alamat Warung</label>
                        <Input class="form-control" id="alamat" type="text" name="alamat" value="<?= $makanan['alamat']; ?>" required>
                    </div>

                    <div class="mb-2">
                        <label for="nama" class="form-label">Pemilik Warung</label>
                        <Input class="form-control" id="pemilik" type="text" name="pemilik_warung"value="<?= $makanan['pemilik_warung']; ?>"
                            required>
                    </div>

                    <div class="mt-2">
                        <button type="submit" name="submit" class="btn btn-light m-2">Simpan</button>
                    </div>
                </form>






            </div>
        </div>
    </div>
</div>
</div>


<!-- CONTENT END -->

<!-- footer -->
<?php 
     include_once('include/footer.php')
    ?>