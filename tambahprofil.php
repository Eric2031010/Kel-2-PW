<!--Dikerjakan oleh 2031012 Jessy-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambahprofil.css">
    <title>Tambah Profil Karyawan</title>
</head>

<body>
    <div>
        <image class="fotoprofil" src="profile.jpg"/>
    </div>
    <div>
        <form>
            <input class="unggahfoto" name="unggahfoto" type="file">
        </form>
    </div>

    <div class="container">
        <form>
            <label for="id" class="id-label">ID</label>
            <input type="text" class="id" name="id">
            <label for="nama" class="nama-label">Nama</label>
            <input type="text" class="nama" name="nama">
            <label for="tanggal-lahir" class="tanggal-lahir-label" >Tanggal Lahir</label>
            <input type="date" class="tanggal-lahir" placeholder="DD-MM-YYYY" name="tanggal-lahir" min="1900-01-01" max="2030-12-31">
            <label for="alamat" class="alamat-label">Alamat</label>
            <input type="text" class="alamat" name="alamat">
            <label for="nomor-telepon" class="nomor-telepon-label">Nomor Telepon</label>
            <input type="text" class="nomor-telepon" name="nomor-telepon">
            <label for="posisi" class="posisi-label">Posisi</label>
            <input type="text" class="posisi" name="posisi">
            <label for="departemen" class="departemen-label">Departemen</label>
            <input type="text" class="departemen" name="departemen">

            <a href="pengaturan.php">
                <button type="submit"class="simpan">Simpan</button>
                <button type="submit"class="kembali">Kembali</button>
            </a>
        </form>
    </div>
</body>
</html>
