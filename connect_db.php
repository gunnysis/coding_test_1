<?php
global $conn;

$hostName = '127.0.0.1';
$userName = 'root';
$userPassword = '123123';
$dbName = 'test';


try {
  $conn = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $userPassword);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  echo "연결 실패: " . $e->getMessage();
}


