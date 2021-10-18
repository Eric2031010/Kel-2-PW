<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="bioadmin.css">
    <title>Biodata Admin</title>
</head>
<body>
 <!-- sidebar -->
  
    <div class="a-sidebar">
        <div class="a-logo">
        </div>
            <button type="submit" class="a-currentmenu"><a href="#"><i class="profil" data-icon="bx:bxs-user"></i>&ensp;Profil</a></button>
            <button type="submit" class="a-menu"><a href="#"><i class="rekapitulasi"></i>&ensp;Rekapitulasi</a></button>
            <button type="submit" class="a-menu"><a href="#"><i class="pengaturan" ></i>&ensp;Pengaturan</a></button>
            <button type="submit" class="a-menu"><a href="keluar.php"><i class="exit" data-icon="icomoon-free:exit"></i>&ensp;Keluar</a></button>
    </div>

    <!-- kontent -->
    <div>
        <image class="a-fotoprofil" src="profile.jpg"/>
    </div>
    <div>
        <form>
            <input class="a-unggahfoto" name="unggahfoto" type="file">
        </form>
    </div>
    <div class="a-container">
        <?php 
            $id= $_POST['a_id'];
            $nama= $_POST['a_nama'];
            $tanggal_lahir= $_POST['a_tanggal_lahir'];
            $alamat= $_POST['a_alamat'];
            $nomor_telepon= $_POST['a_nomor_telepon'];
        ?>
        <form method="post" action="edit.php">
            <label for="a_id" class="a-id-label">ID</label>
            <input type="text" class="a-id" name="id" value="<?php echo $id?>">
            <label for="nama" class="a-nama-label">Nama</label>
            <input type="text" class="a-nama" name="nama" value="<?php echo $nama?>">
            <label for="tanggal_lahir" class="a-tanggal-lahir-label" >Tanggal Lahir</label>
            <input type="date" class="a-tanggal-lahir" placeholder="DD-MM-YYYY" name="tanggal_lahir" min="1900-01-01" max="2030-12-31" value="$tanggal_lahir">
            <label for="a_alamat" class="a-alamat-label">Alamat</label>
            <input type="text" class="a-alamat" name="alamat" value="<?php echo $alamat?>">
            <label for="a_nomor_telepon" class="a-nomor-telepon-label">Nomor Telepon</label>
            <input type="number" class="a-nomor-telepon" name="nomor_telepon" value="<?php echo $nomor_telepon?>">
            <button type="submit" class="a-simpan">Simpan</button> 
        </form>
   
    </div>


</body>

</html>