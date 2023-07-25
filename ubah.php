<?php
    require_once('conn.php');
    
    $id_makanan = $_GET["id_makanan"];
    $query = "SELECT * FROM 'makanan' WHERE id_makanan = $id_makanan";
    
    $data = mysqli_query($conn, $query); 
    var_dump($data);
    
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
    <div class="row">
        <div class="col-12">
            <h1>Ubah Data Makanan</h1>
            <form action="" method="post">
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Makanan</label>
                    <Input type="text" class="form-control" id="nama" name="nama" value="PAPEDA"
                    placeholder="Masukan Nama Makanan" required>
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Harga</label>
                    <Input type="number" class="form-control" id="harga" name="harga" value=""
                    placeholder="Masukan Harga" required>
                </div>

                <div class="mb-2">
                    <label for="nama">Warung</label>
                    <Input id="warung" type="text" name="warung"
                    placeholder="Masukan Warung" required>
                </div>

                <div class="mb-2">
                    <label for="nama">Alamat Warung</label>
                    <Input id="alamat" type="text" name="alamat"
                    placeholder="Masukan Alamat" required>
                </div>

                <div class="mb-2">
                    <label for="nama">Pemilik Warung</label>
                    <Input id="pemilik" type="text" name="pemilik_warung"
                    placeholder="Masukan Pemilik Warung" required>
                </div>

                <div class="mb-2">
                    <button type="submit" name="submit">Simpan</button>
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