<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: Origin, Methods, Content-Type, Authorization");

    // 讀取 POST 資料，並解析為 JSON 格式
    $url = 'https://luocici.github.io/CallMachineDemo/data.json';
    $json = file_get_contents($url);
    $data = json_decode($json, true);


// 開啟檔案，並寫入資料
$file = fopen('data.json', 'w');
fwrite($file, $json_data);
fclose($file);

// 回應 JSON 格式的資料
header('Content-Type: application/json');
echo json_encode(array('success' => true));
?>
