<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: Origin, Methods, Content-Type, Authorization");

    $data = $_POST['text'];
    $file = fopen('https://luocici.github.io/CallMachineDemo/data.json', 'w');
    fwrite($file, $data);
    fclose($file);
	echo json_encode(array('OK --- text' => $_POST['text']));
?>
