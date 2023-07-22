<?php
    require_once('conn.php');

    $query = "SELECT * FROM makanan";
    $data = mysqli_query($conn, $query)

    
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
            <a href="tambah.php" class="btn btn-success"> <i class="bi bi-plus-circle"></i> Tambah Makanan </a>


            <div class="table-responsive mt-3">

                <table class="table table-bordered table-hover">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Makanan</th>
                        <th>Harga</th>
                        <th>Warung</th>
                        <th>Alamat Warung</th>
                        <th>Pemilik Warung</th>
                        <th> Aksi </th>
                    </tr>
                    <?php $i = 0; foreach($data as $d): ?>
                    <tr>
                        <td><?= ++$i?></td>
                        <td><?=$d ['nama_makanan']?></td>
                        <td>Rp. <?= number_format($d['harga_makanan'],0,',','.'); ?></td>
                        <td><?=$d  ['warung']?></td>
                        <td><?=$d ['alamat']?></td>
                        <td><?=$d ['pemilik_warung']?></td>
                        <td>
                            <a href="detail.php?id=<?= $d['id_makanan'];?>" class="btn btn-primary"> <i
                                    class="bi bi-eye-fill"></i></a>
                            <a href="ubah.php?id_makanan=<?= $d['id_makanan'];?>" class="btn btn-success"> <i class="bi bi-pencil-fill"></i></a>
                            <a href="hapus.php?id_makanan=<?= $d['id_makanan'];?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Datanya?');" class="btn btn-danger"> <i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>


                </table>




            </div>
        </div>
    </div>
</div>

 <!-- CONTENT END -->

    <!-- footer -->
    <?php 
     include_once('include/footer.php')
    ?>