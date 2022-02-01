<?php
  session_start();
  $dname   = $_SESSION['dname'];
  $dtelno  = $_SESSION['dtelno'];
  $dmail   = $_SESSION['dmail'];
  $message = $_SESSION['message'];  
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
<form action="inquInsert.php" method="post">
	<table class="ta1">
          <tr><th>代表者氏名</th><td><?php echo $dname; ?></td></tr>
          <tr><th>連絡先電話番号</th><td><?php echo $dtelno; ?></td></tr>
          <tr><th>メールアドレス</th><td><?php echo $dmail; ?></td></tr>
	  <tr><th>お問い合わせ内容</th><td><?php echo $message; ?></td></tr>
        </table>
	<input class="submit_a" type="submit" value="予約確定">
        <input class="submit_a" type="button" value="前の画面に戻る" onclick="history.back();">
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