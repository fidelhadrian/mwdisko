<?php

    require_once('helper.php');
    parse_str(file_get_contents('php://input'), $update);
    
    $id = $_GET['id'];
 

    $query = "DELETE FROM website WHERE id = '$id'";
    $sql   = mysqli_query($db_connect, $query) or die("error");

    if($sql) {
        echo json_encode (array('message' => "Deleted"));
    }   else {
        echo json_encode (array('message' => "error"));
    }
?>