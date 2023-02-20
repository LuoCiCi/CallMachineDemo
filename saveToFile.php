<?php
    $data = $_POST['text'];
    $file = fopen('data.txt', 'w');
    fwrite($file, $data);
    fclose($file);
?>
