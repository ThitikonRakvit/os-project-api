<?php

    require_once('dbconfig.php');

    $db = new Database('localhost','province','root','12344678');

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        echo json_encode($db->query('SELECT * FROM provincial_slogan'));
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo 'This is POST';
    } else {
        http_response_code(405);
    }

?>