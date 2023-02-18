<?php
  // 讀取JSON檔案中的資料
  $jsonString = file_get_contents('data.json');
  $data = json_decode($jsonString, true);

  // 將數據輸出到網頁中
  foreach ($data as $item) {
    echo '<p>單號：' . $item['no'] . '</p>';
    echo '<p>用餐場所：' . $item['place'] . '</p>';
    echo '<p>等候狀態：' . $item['status'] . '</p>';
  }
?>
