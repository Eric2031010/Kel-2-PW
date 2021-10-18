<?php 


include 'koneksi.php';
$id= $_POST['id'];
$nama= $_POST['nama'];
$tanggal_lahir= $_POST['tanggal_lahir'];
$alamat= $_POST['alamat'];
$nomor_telepon= $_POST['nomor_telepon'];
 
mysqli_query($koneksi,"UPDATE admins SET nama='$nama', alamat='$alamat', tanggal_lahir='$tanggal_lahir', nomor_telepon='$nomor_telepon' WHERE id='$id'");
 
header("location:bioadmin.php?");
 
?>
