<?php 
include '../../config/koneksi.php';
$id_parkiran = $_POST['id_parkiran'];
$harga = $_POST['harga'];
$alamat = $_POST['alamat'];

$query = mysqli_query($conn,"INSERT INTO parkiran VALUES('$id_parkiran','$harga','$alamat')
");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>