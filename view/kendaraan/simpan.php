<?php 
include '../../config/koneksi.php';
$jenis_plat_nomor = $_POST['jenis_plat_nomor'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$id_parkiran = $_POST['id_parkiran'];

$query = mysqli_query($conn,"INSERT INTO kendaraan VALUES('$jenis_plat_nomor','$jenis_kendaraan','$id_parkiran')
");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>