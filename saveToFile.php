<?php
$data = array('key1' => 'value1', 'key2' => 'value2');
$json = json_encode($data);
$callback = $_GET['callback'];
echo $callback . '(' . $json . ')';
?>
