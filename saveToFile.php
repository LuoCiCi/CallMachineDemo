<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: Origin, Methods, Content-Type, Authorization");
header("Content-Type:application/json; charset=utf-8");

    $data = $_POST['text'];
    $file = fopen('https://luocici.github.io/CallMachineDemo/data.json', 'w');
    fwrite($file, json_decode($data));
    fclose($file);

//     ob_clean();
//     echo json_encode(array('OK --- text' => $_POST['text']));
?>
