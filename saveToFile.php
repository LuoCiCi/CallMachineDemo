<?php
  if(isset($_POST['data'])) {
    // 取得 POST 傳送過來的資料
    $data = json_decode($_POST['data'], true);

    // 讀取原有的 JSON 檔案
    $json = file_get_contents('data.json');

    // 將 JSON 轉換成 PHP 陣列
    $arr_data = json_decode($json, true);

    // 新增資料到陣列中
    array_push($arr_data, $data);

    // 將陣列轉換成 JSON
    $json_data = json_encode($arr_data, JSON_PRETTY_PRINT);

    // 寫入檔案
    if(file_put_contents('data.json', $json_data)) {
        echo '資料已成功存入檔案！';
    } else {
        echo '發生錯誤，無法存入檔案。';
    }
}
?>
