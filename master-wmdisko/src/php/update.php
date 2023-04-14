<?php

    require_once('helper.php');
    parse_str(file_get_contents('php://input'), $update);
    
    $id = $update['id'];
    $nama = $update['nama'];
    $link = $update['link'];
    $ui = $update['ui'];
 

    $query = "UPDATE website SET  nama = '$nama', link = '$link', ui = '$ui' WHERE id = '$id'";
    $sql   = mysqli_query($db_connect, $query) or die("error");

    if($sql) {
        echo json_encode (array('message' => "Update"));
        // mengalihkan halaman kembali ke index.php
        //new update time
        header("location:index.php");
    }   else {
        echo json_encode (array('message' => "error"));
    }
?>