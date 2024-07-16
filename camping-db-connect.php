<?php

#include 和 require的效果一樣，擇一使用(都是抓connect-settings的資料)

// include __DIR__.'/connect-settings.php'; 
require __DIR__ . '/camping-connect-settings.php';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";

$pdo_options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);

if(!isset($_SESSION)) {
// 如果尚未啟動 session 的功能, 就啟動
session_start();
}

/*
# 執行一個 sql 語句，取得 PDOStatement 類型的物件
$stmt = $pdo->query("SELECT * FROM address_book LIMIT 3");

#呼叫 fetch() 取得一筆資料
$row = $stmt->fetch(PDO::FETCH_ASSOC);

#輸出json的格式
echo json_encode($row);
*/
