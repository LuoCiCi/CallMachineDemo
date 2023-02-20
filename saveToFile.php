<?php
    // 讀取 POST 資料，並解析為 JSON 格式
$data = json_decode(file_get_contents('php://input'), true);

// 要寫入的 JSON 資料
$json_data = json_encode($data);

// 開啟檔案，並寫入資料
$file = fopen('data.json', 'w');
fwrite($file, $json_data);
fclose($file);

// 回應 JSON 格式的資料
header('Content-Type: application/json');
echo json_encode(array('success' => true));
?>
