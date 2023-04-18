<?php

    require_once('helper.php');
    
    
    $nama = $_POST['nama'];
    $link = $_POST['link'];
    $ui = $_POST['ui'];
 

    $query = "INSERT INTO website(nama,link,ui) VALUES ('$nama', '$link', '$ui')";
    $sql   = mysqli_query($db_connect, $query) or die("error");

    if($sql) {
        echo json_encode (array('message' => "Success"));
        // mengalihkan halaman kembali ke index.php
        header("location:index.php");
    }   else {
        echo json_encode (array('message' => "error"));
    }
?>