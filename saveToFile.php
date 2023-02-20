<?php
    $data = $_POST['text'];
    $file = fopen('https://luocici.github.io/CallMachineDemo/data.json', 'w');
    fwrite($file, $data);
    fclose($file);
?>
