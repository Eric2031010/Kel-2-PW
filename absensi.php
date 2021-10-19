<!-- JOCELYN 2031013 -->   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="absensi.css">
    <title>Absensi</title>
</head>
<body>     
    <!-- sidebar -->
    <div class="sidebar">
        <div class="logo">
        </div>
        <button type="button" class="menu"><a href="#"><i class="profil" data-icon="bx:bxs-user"></i>&ensp;Profil</a></button>
        <button type="button" class="menu"><a href="#"><i class="calendar" data-icon="uil:calendar-alt"></i>&ensp;Jadwal</a></button>
        <button type="button" class="currentmenu"><a href="absensi.php"><i class="absensi" data-icon="ci:edit"></i>&ensp;Absensi</a></button>
        <button type="button" class="menu"><a href="laporan.php"><i class="laporan" data-icon="clarity:clipboard-line"></i>&ensp;Laporan</a></button>
        <button type="button" class="menu"><a href="#"><i class="exit" data-icon="icomoon-free:exit"></i>&ensp;Keluar</a></button>
    </div>

    <!-- kontent -->
    <div class="main">
        <div class="biodata-left">
            <table align="left" border="0" cellspacing="25" width="370px">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td>001</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>Eric</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="biodata-right">
            <table align="right" border="0" cellspacing="25" width="450px">
                <tbody>
                    <tr>
                        <td>Posisi</td>
                        <td>:</td>
                        <td>Akuntan</td>
                    </tr>
                    <tr>
                        <td>Departemen</td>
                        <td>:</td>
                        <td>Keuangan</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class= "form-absensi">
            <table border="0" cellspacing="20" width="1120px">
                <tbody>
                    <tr>
                        <td width="300px">
                            Foto    
                        </td>
                        <td>
                            <form>
                                <input type='file' class="unggah" name="foto" accept='image/*' />
                            </form> 
                        </td>
                    </tr>
                    <tr>
                        <td width="300px"> 
                            <?php
                                $dt = new DateTime();
                                echo $dt->format('d-m-Y');
                            ?>

                            &ensp;

                            <?php
                                $dt = new DateTime();
                                date_default_timezone_set("Asia/Jakarta");
                                echo $dt->format('h:i');
                            ?>
                        </td>
                        <td width="300px">
                            <button class="masuk">Masuk</button>
                            <button class="keluar">Keluar</button>
                        </td>
                    </tr>
                    <tr>
                        <td width="300px">Lokasi</td>
                        <td width="300px"><input type="text" class="lokasi" name="lokasi"></td>
                    </tr>
                    <tr>
                        <td width="300px">Catatan</td>
                    </tr>
                </tbody>
            </table>
            
            <textarea class="catatan" name="catatan" cols="40" rows="5"></textarea>
            <br>
            <br>
            <br>
            <button type="submit" class="simpan">Simpan</button>
        </div>

        <br>
        <br>
</body>
</html>


