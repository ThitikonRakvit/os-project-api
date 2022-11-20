<?php

    require_once('dbconfig.php');

    $db = new Database('ro2padgkirvcf55m.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','mdsqd8htymq8r7ui','vxa335kynp04cikk','p6l5rtmzmameklpe');

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        echo json_encode($db->query('SELECT * FROM provincial_slogan'));
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo 'This is POST';
    } else {
        http_response_code(405);
    }

?>