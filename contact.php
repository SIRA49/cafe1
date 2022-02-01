<?php
  session_start();
  $dnameErr = "";
  if (isset($_SESSION['errMsg']['dname'])) {
    $dnameErr = "<span style='color: red;'>" . $_SESSION['errMsg']['dname'] ."</span>";
  }
  unset($_SESSION['errMsg']); // すべてのエラーメッセージをクリア

  $dname = "";
  if (isset($_SESSION['dname']) == true) {
      $dname = $_SESSION['dname'];
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
<head>

<title>お問い合わせ</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>
<header>
<h1 id="logo"><a href="index1.php"><img src="images/logo.png" alt=""></a></h1>

<?php include("./topmenu.php"); ?>

<ul class="icon">
<li><a href="#"><img src="images/icon_facebook.png" alt="Facebook"></a></li>
<li><a href="#"><img src="images/icon_twitter.png" alt="Twitter"></a></li>
<li><a href="#"><img src="images/icon_instagram.png" alt="Instagram"></a></li>
</ul>
</header>


<div id="contents">

<div id="main">

<section>



<h2>ご予約・お問い合わせ</h2>

<form method="post" action="inquCheck.php" >
<table class="ta1">
<tr>
<th>お名前※</th>
<td><input type="text" name="dname" size="30" class="ws"></td>
</tr>
<tr>
<th>電話番号※</th>
<td><input type="text" name="dtelno" size="30" class="ws"></td>
</tr>
<th>メールアドレス</th>
<td><input type="text" name="dmail" size="30" class="ws"></td>
</tr>
<tr>
<th>お問い合わせ詳細</th>
<td><textarea name="message" cols="30" rows="10" class="wl"></textarea></td>
</tr>
</table>
<input class="submit_a" type="submit" value="内容確認" />
    <input class="submit_a" type="button" value="前の画面に戻る" onclick="history.back();" />
</form>

<p class="c">
<input type="submit" value="内容を確認する" class="btn">
</p>

</section>

</div>


</div>





<aside id="mainimg">
<div class="slide-sub1">slide-sub1</div>
</aside>



</body>
</html>