<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: Origin, Methods, Content-Type, Authorization");
    header("Content-Type:application/json; charset=utf-8");

    $data = $_POST['text'];
    $url = 'https://luocici.github.io/CallMachineDemo/data.json';
    $file_contents = file_get_contents($url);
    $file = fopen('data.json', 'w');
    fwrite($file, $file_contents);
    fclose($file);
?>
