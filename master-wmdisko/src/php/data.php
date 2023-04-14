<?php

    require_once('helper.php');

    $query = "SELECT * FROM website";
    $sql   = mysqli_query($db_connect, $query);

    if($sql){
        $result = array();
        while($row = mysqli_fetch_array($sql)) {
            array_push($result, array(
                'id' => $row['id'], 'nama' => $row['nama'], 'link' => $row['link'], 'tampilan_ui' => $row['ui']));
        }
        echo json_encode( array('result' => $result ) );
    }
?>