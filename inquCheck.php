<?php
  session_start();
  $dname   = htmlspecialchars($_POST["dname"]);
  $dtelno  = htmlspecialchars($_POST["dtelno"]);
  $dmail   = htmlspecialchars($_POST["dmail"]);
  $message = htmlspecialchars($_POST["message"]);
// 入力値をセッションに格納する
  $_SESSION['dname'] = $dname;
  $_SESSION['dtelno'] = $dtelno;
  $_SESSION['dmail'] = $dmail;
  $_SESSION['message'] = $message;
  
// エラーメッセージを格納する
  $errMsg = array();

  // 未入力チェック******************************
  if (empty($dname) == true) {
      $errMsg['dname'] = "名前が未入力です";
  }
  if (empty($dtelno) == true) {
      $errMsg['dtelno'] = "電話番号が未入力です";
  }
  if (empty($dmail) == true) {
      $errMsg['dmail'] = "メールアドレスが未入力です";
  }
  if (count($errMsg) == 0) {    // エラーがなかった場合
      header("location: inquConfirm.php");
  } else {             			  // 入力エラーがあった場合
      $_SESSION['errMsg'] = $errMsg;  // エラー内容をセッションに格納する
      header("location: contact.php");
  }
  exit();
?>