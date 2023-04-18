<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengenal Tabel HTML</title>
</head>

<body>
    
        <table border="1">
                <tr>
                <th>No</th>
                <th>id</th>
                <th>nama</th>
                <th>link</th>
                <th>ui</th>
                <th>aksi</th>
                </tr>
                
                <?php
                include "helper.php" ?>
                
                <?php
                $no = 1;
                $query ="SELECT * FROM website";
                $sql   = mysqli_query($db_connect, $query) or die("error");
                while($data = mysqli_fetch_array($sql)){
                $id= $data['id'];
                $nama = $data['nama'];
                $link = $data['link'];
                $ui = $data['ui'];
                        ?>

                <tr>
                        <td><?php echo $no++; ?></td>
                <td id="statusnilai"><?php echo $id; ?></td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $link; ?></td>
                <td><?php echo $ui; ?></td>
                <td>
					<a href="edit.php?id=<?php echo $data['id'];?>">EDIT</a>
					<a href="delete.php?id=<?php echo $data['id'];?>">HAPUS</a>
                                        <a href="tambah.php">TAMBAH DATA</a>

				</td>
                </tr>

                <?php 
                }
                ?>
        </table>


</body>
</html>