<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id = $_POST['id'];
$nama_sosmed_post = $_POST['nama_sosmed_post'];
$icon_post = $_POST['icon_post'];
//
//upload data
$nama_file = $_FILES['icon_post']['name'];
$source = $_FILES['icon_post']['tmp_name'];
$folder = './icon/';
move_uploaded_file($source, $folder . $nama_file);
//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_social SET 
 nama_sosmed = '$nama_sosmed_post',
 icon = '$nama_file'
 WHERE id = '$id'");
//cek apakah proses edit ke database berhasil
if ($update) {
  //jika berhasil tampilkan pesan berhasil edit data
  echo "<script>
 alert('Data Berhasil Diubah');
 window.location.href='index.php';
 </script>";
} else {
  //jika gagal tampilkan pesan gagal edit data
  echo "<script>
 alert('Data Gagal Diubah');
 window.location.href='index.php';
 </script>";
}
 //
