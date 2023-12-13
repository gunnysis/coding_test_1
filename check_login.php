<?php
include "./connect_db.php";
global $conn;

$id = $_POST['id'] ?? null;
$passwd = $_POST['passwd'] ?? null;

if ($id !== null && $passwd !== null) {
  $stmt = $conn->prepare('SELECT * FROM member WHERE id = ?');
  $stmt->bindParam(1, $id,PDO::PARAM_STR);
  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row !== false && password_verify($passwd, $row['passwd'])) {
    echo "로그인 되었습니다.";
  } else {
    echo "아이디 또는 비밀번호가 잘못되었습니다.";
  }
} else {
  echo "아이디와 비밀번호를 입력하세요.";
}
?>
