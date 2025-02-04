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
            <th>id parkiran.</th>
            <th>harga</th>
            <th>alamat</th>
            <th>Aksi</th>
        </tr>

        <?php
        include '../../config/koneksi.php';
        $query=mysqli_query($conn,"SELECT * FROM parkiran");
        $no = 1;
        
        if(mysqli_num_rows($query) > 0){
            while($result=mysqli_fetch_assoc($query)){
                
            

        ?>
        <tr>

            <td><?php echo $result['id_parkiran'] ?></td>
            <td><?php echo $result['harga'] ?></td>
            <td><?php echo $result['alamat'] ?></td>
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