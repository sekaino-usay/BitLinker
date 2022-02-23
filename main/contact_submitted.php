<?php
//受け取りデータ
$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];

//ファイル作成＆LINE通知処理関数化
function enquiry()
{
  //受け取りデータ
  $name = $_POST['name'];
  $email = $_POST['email'];
  $content = $_POST['content'];

  //ディレクトリのファイル数取得
  $directory = "../enquiry/";
  $filecount = 0;
  $files = glob($directory . "*");
  if ($files) {
    $filecount = count($files);
  }

  //書き込み用ファイル作成
  $filecount = $filecount + 1;
  $report_file = $directory . "enquiry" . $filecount . ".txt";
  touch($report_file);

  //書き込み用メッセージ作成
  $message = "タイムスタンプ：" . $_SERVER['REQUEST_TIME'] . "\n\nお名前：" . $name . "\nメールアドレス：" . "$email" . "\nお問い合わせ内容：" . $content . "\n\nIPアドレス：" . $_SERVER['HTTP_X_FORWARDED_FOR'];

  //書き込み
  file_put_contents($report_file, $message);
}
?>

<!DOCTYPE html>
<html>

<head>
  <?php include_once __DIR__ . "/static/head/head.php"; ?>
</head>

<body>
  <!-- アクセス解析 -->
  <script src="https://accaii.com/bitlinker/script.js" async></script>
  <noscript><img src="https://accaii.com/bitlinker/script?guid=on"></noscript>

  <!-- ナビゲーション -->
  <?php include_once __DIR__ . "/static/header/header.php"; ?>

  <!-- コンテンツ -->
  <div class="flex">
    <div class="flex_txt">
      <h1>お問い合わせ</h1>
      <br>

      <?php
      //reCAPTCHA
      if (isset($_POST["recaptchaResponse"]) && !empty($_POST["recaptchaResponse"])) {
        $secret = "6LdnL_4bAAAAAInCNLAIonXytFBrwAxPMKI40fUq";
        $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $_POST["recaptchaResponse"]);
        $reCAPTCHA = json_decode($verifyResponse);
        if ($reCAPTCHA->success) {
          if (empty($name)) {
            echo "<p>お名前を入力してください．</p>";
          } else {
            $name_c = 'ok';
          }
          if (empty($email)) {
            echo "<p>メールアドレスを入力してください．</p>";
          } elseif (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $email)) {
            $email_c = 'ok';
          } else {
            echo "<p>メールアドレスを正しく入力してください．</p>";
          }
          if (empty($content)) {
            echo "<p>お問い合わせ内容を入力してください．</p>";
          } else {
            $content_c = 'ok';
          }
          if ($name_c == 'ok' && $email_c == 'ok' && $content_c == 'ok') {
            echo "<p>お問い合わせありがとうございます！<br>内容を確認し，ご連絡します．<br>しばらくお待ち下さい．</p>";
            enquiry();
          }
        } else {
          echo "<p>エラーが発生しました．もう一度試してください．</p>";
        }
      } else {
        echo "<p>エラーが発生しました．もう一度試してください．</p>";
      }
      ?>

      <a href="./contact"><input type="submit" value="戻る" class="button"></a>
    </div>
    <div class="flex_img">
      <img src="./img/contact.svg">
    </div>
  </div>
  <hr>

  <?php include_once __DIR__ . "/static/shorten_form/shorten_form.php"; ?>

  <!-- 広告 -->
  <!-- Moons APPS ad start -->
  <script class="moons_apps_ad_banner moons_apps_ad_auto" src="https://apps.moons14.com/ad/js/banner.js"></script>
  <!-- Moons APPS ad end -->

  <hr>

  <!-- フッター -->
  <?php include_once __DIR__ . "/static/footer/footer.php"; ?>
</body>

</html>