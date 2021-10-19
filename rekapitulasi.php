<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rekapitulasi.css">
    <title>Rekapitulasi</title>
</head>

<body>
<!-- Sidebar -->
    <div class="a-sidebar">
        <div class="a-logo">
        </div>
            <button type="submit" class="a-menu"><a href="#"><i class="profil" data-icon="bx:bxs-user"></i>&ensp;Profil</a></button>
            <button type="submit" class="a-currentmenu"><a href="#"><i class="rekapitulasi"></i>&ensp;Rekapitulasi</a></button>
            <button type="submit" class="a-menu"><a href="#"><i class="pengaturan" ></i>&ensp;Pengaturan</a></button>
            <button type="submit" class="a-menu"><a href="keluar.php"><i class="exit" data-icon="icomoon-free:exit"></i>&ensp;Keluar</a></button>
    </div>

<!-- Content -->
    <div class="main">
        <div class="tanggal">
            <table align="left" border="0" cellspacing="5" width="500px">
                <tbody>
                    <tr>
                        <td>Tanggal</td><td>:</td>
                        <td><input type="date" class="tanggal-awal" placeholder="Tanggal Awal" name="tanggal-awal" min="1900-01-01" max="2030-12-31"></td>
                        <td>&ensp;-&ensp;</td>
                        <td><input type="date" class="tanggal-akhir" placeholder="Tanggal Akhir" name="tanggal-akhir" min="1900-01-01" max="2030-12-31"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="filter">
            <table align="left" border="0" cellspacing="25" width="1050px">
                <tbody>
                    <tr>
                        <td><input type="text" class="id" placeholder="  ID"></input></td>
                        <td><input type="text" class="departemen" placeholder="  Departemen"></input></td>
                        <td><button type="submit" class="cari">Cari&ensp;&emsp;<i class="search" data-icon="bytesize:search"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="tabel">
            <table border="1" bordercolor="#c9c9c9" width="1050px" cellspacing ="0">
                <tbody>
                    <tr>
                        <td width="5px" height="30px" bgcolor="#ececec">No</td>
                        <td width="8px" height="30px" bgcolor="#ececec">ID</td>
                        <td width="10px" height="30px" bgcolor="#ececec">Nama</td>
                        <td width="10px" height="30px" bgcolor="#ececec">Tanggal</td>
                        <td width="50px" height="30px" bgcolor="#ececec">Jam Masuk</td>
                        <td width="50px" height="30px" bgcolor="#ececec">Jam Keluar</td>
                        <td width="80px" height="30px" bgcolor="#ececec">Keterangan</td>
                        <td width="80px" height="30px" bgcolor="#ececec">Catatan</td>                   
                        <td width="90px" height="30px" bgcolor="#ececec">Lokasi</td>
                        <td width="50px" height="30px" bgcolor="#ececec">Foto</td>
                    </tr>
                    <tr>
                        <td bgcolor="white" height="30px">1</td>
                        <td bgcolor="white" height="30px">001</td>
                        <td bgcolor="white" height="30px">Eric</td>
                        <td bgcolor="white" height="30px">11/10/2021</td>
                        <td bgcolor="white" height="30px">07:35</td>
                        <td bgcolor="white" height="30px">17:00</td>
                        <td bgcolor="white" height="30px">Hadir</td>
                        <td bgcolor="white" height="30px">-</td>
                        <td bgcolor="white" height="30px">Ruko Mega Legenda</td>
                        <td bgcolor="white" height="30px">001.jpg</td>
                    </tr>
                    <tr>
                        <td bgcolor="white" height="30px">2</td>
                        <td bgcolor="white" height="30px">002</td>
                        <td bgcolor="white" height="30px">Jessy</td>
                        <td bgcolor="white" height="30px">12/10/2021</td>
                        <td bgcolor="white" height="30px">-</td>
                        <td bgcolor="white" height="30px">-</td>
                        <td bgcolor="white" height="30px">Tidak Hadir</td>
                        <td bgcolor="white" height="30px">-</td>
                        <td bgcolor="white" height="30px">Ruko Mega Legenda</td>
                        <td bgcolor="white" height="30px">002.jpg</td>
                    </tr>
                    <tr>
                        <td bgcolor="white" height="30px">3</td>
                        <td bgcolor="white" height="30px">003</td>
                        <td bgcolor="white" height="30px">Jocelyn</td>
                        <td bgcolor="white" height="30px">13/10/2021</td>
                        <td bgcolor="white" height="30px">07:45</td>
                        <td bgcolor="white" height="30px">17:05</td>
                        <td bgcolor="white" height="30px">Hadir</td>
                        <td bgcolor="white" height="30px">-</td>
                        <td bgcolor="white" height="30px">Ruko Mega Legenda</td>
                        <td bgcolor="white" height="30px">003.jpg</td>
                    </tr>
                    <tr>
                        <td bgcolor="white" height="30px">4</td>
                        <td bgcolor="white" height="30px">004</td>
                        <td bgcolor="white" height="30px">Viona</td>
                        <td bgcolor="white" height="30px">14/10/2021</td>
                        <td bgcolor="white" height="30px">07:55</td>
                        <td bgcolor="white" height="30px">17:10</td>
                        <td bgcolor="white" height="30px">Hadir</td>
                        <td bgcolor="white" height="30px">-</td>
                        <td bgcolor="white" height="30px">Ruko Mega Legenda</td>
                        <td bgcolor="white" height="30px">004.jpg</td>
                    </tr>
                    <tr>
                        <td bgcolor="white" height="30px">5</td>
                        <td bgcolor="white" height="30px">005</td>
                        <td bgcolor="white" height="30px">Felix</td>
                        <td bgcolor="white" height="30px">15/10/2021</td>
                        <td bgcolor="white" height="30px">08:05</td>
                        <td bgcolor="white" height="30px">17:15</td>
                        <td bgcolor="white" height="30px">Terlambat</td>
                        <td bgcolor="white" height="30px">-</td>
                        <td bgcolor="white" height="30px">Ruko Mega Legenda</td>
                        <td bgcolor="white" height="30px">005.jpg</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button onclick= "window.print();" type="submit" class="cetak">Cetak</button>
    </div>
</body>
</html>

<!--Dikerjakan oleh Jessy-->