<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>로그인 기능 구현</title>
</head>
<body>
  <form action="check_login.php" method="post">
    <p>
      <span>아이디: </span>
      <input type="text" name="id"> </br>
    </p>
    <p>
      <span>패스워드: </span>
      <input type="text" name="passwd">  </br>
      <button type="submit">로그인</button>
    </p>

  </form>
</body>
</html>
