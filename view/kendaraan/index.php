<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Parkir kendaraan yasa </h1>
    <a href="tambahan.php">tambahan.php</a>
    <table border="2">
        <tr>
            <th>jenis plat nomor</th>
            <th>jenis kendaraan</th>
            <th>id parkiran</th>
            <th>aksi</th>
        </tr>

        <?php
        include '../../config/koneksi.php';
        $query=mysqli_query($conn,"SELECT * FROM kendaraan");
        $no = 1;
        
        if(mysqli_num_rows($query) > 0){
            while($result=mysqli_fetch_assoc($query)){
                
            

        ?>
        <tr>
    
            <td><?php echo $result['jenis_plat_nomor'] ?></td>
            <td><?php echo $result['jenis_kendaraan'] ?></td>
            <td><?php echo $result['id_parkiran'] ?></td>
           <td>
            <a href=''>Edit </a>
            <a href=''>Hapus </a>
           </td>
        </tr>
        <?php
        $no++;
        }
    }else{
        echo "data kosong";
    }
    ?>
    </table>
</body>
</html>