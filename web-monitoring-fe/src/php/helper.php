<?php
    define('HOST', 'sql307.epizy.com');
    define('USER', 'epiz_33979105');
    define('PASS', 'rdEdjYqzEU');
    define('DB', 'epiz_33979105_db_monitoringweb');

    $db_connect = mysqli_connect(HOST, USER, PASS, DB) or die('unable to connect to database');


?>
