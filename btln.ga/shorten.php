<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="./icon.ico">
  <meta charset="utf-8">
  <title>BitLinker - 登録不要のカスタム短縮URL作成サービス</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./main.css">
  <link rel="stylesheet" href="./input.css">
  <link rel="stylesheet" href="./submit.css">
  <link rel="stylesheet" href="./footer.css">
  <script type="text/javascript" src="./input.js"></script>
</head>

<body>
  <!-- アクセス解析 -->
  <script src="//accaii.com/bitlinker/script.js" async></script>
  <noscript><img src="//accaii.com/bitlinker/script?guid=on"></noscript>
  <br><br>
  <a href="https://www.bitlinker.ga"><img src="./logo.png" width="30%"></a>
  <br>
  <br>
  <hr class="line" />
  <br>
  <br>

<?php
//POST元の判定
$host  = $_SERVER['HTTP_REFERER'];
$str   = parse_url($host);
$check = 'wrong';
if (stristr($str['host'], "www.bitlinker.ga")) {
    $check = 'ok';
}

//URL作成処理関数化
function shorten()
{
    //短縮URL
    $your_url = "https://btln.ga/" . $_POST['keyword'];

    //パス
    $path = "./" . $_POST['keyword'];
    //キーワードが使えるか調べる・正規表現で入力文字制限
    if (file_exists($path)) {
        echo('<p>https://btln.ga/' . $_POST['keyword'] . 'は使用できません。</p>');
    } elseif (preg_match("/^[一-龠ぁ-んーァ-ヶー0-9０-９a-zａ-ｚA-ZＡ-Ｚ\-_\.]+$/u", $_POST['keyword'])) {
        mkdir($_POST['keyword']);
        echo('<p>作成された短縮URLは、' . $your_url . 'です。</p>');
        echo('<br>');
        echo('<a href="' . $your_url . '" target="_blank">' . $your_url . '</a>');
        echo('<br>');

        //URLコピーボタン
        echo('<br><input id="copyTarget" type="text" value="' . $your_url . '" readonly>');
        echo('<button onclick="copyToClipboard()">Copy URL</button>');

        //index.phpファイルにリダイレクト内容を書き込み
        file_put_contents(
            $_POST['keyword'] . '/index.php',
            '<?php
  header("Location: ' . $_POST['url'] . '", true, 302);
  exit;
  ?>'
        );
    } else {
        echo('<p>URLを発行できません。<br>「キーワード」に使用できる文字は、半角英数字・全角ひらがな・全角カタカナ・漢字・-（ハイフン）・_（アンダーバー）.(ドット)です。</p>');
    }
}

  //POST元がwww.bitlinker.gaだったら短縮URLを作成
  if ($check == 'ok') {
      shorten();
  } else {
      echo('<p>' . $host . 'から短縮URLを作成しようとしています。<a href="https://www.bitlinker.ga">www.bitlinker.ga</a>から作成してください。</p>');
  }

  ?>

  <!--URLコピーボタン-->
  <script>
    function copyToClipboard() {
      //コピー対象をJavaScript上で変数として定義する
      var copyTarget = document.getElementById("copyTarget");

      //コピー対象のテキストを選択する
      copyTarget.select();

      //選択しているテキストをクリップボードにコピーする
      document.execCommand("Copy");

      //コピーをお知らせする
      alert("コピーしました！: " + copyTarget.value);
    }
  </script>
  <br><br>
  <a href="https://www.bitlinker.ga"><input type="submit" value="戻る" class="button">
    <br>
    <br>
    <!-- フッター -->
    <footer>
      <ul class="footer-menu">
        <br>
        <li><a href="https://www.bitlinker.ga/index.php">ホーム</a> ｜</li>
        <li><a href="https://www.bitlinker.ga/about.php">BitLinkerについて</a> ｜</li>
        <li><a href="https://www.bitlinker.ga/terms.php">利用規約</a> ｜</li>
        <li><a href="https://www.bitlinker.ga/disclaimer.php">免責事項</a> ｜</li>
        <li><a href="https://www.bitlinker.ga/privacy_policy.php">プライバシーポリシー</a> ｜</li>
        <li><a href="https://www.bitlinker.ga/bug_report.php">バグ・脆弱性報告</a> ｜</li>
        <li><a href="https://www.bitlinker.ga/url_report.php">短縮URL報告</a> ｜</li>
        <li><a href="https://www.bitlinker.ga/contact.php">お問い合わせ</a></li>
        <br>
        <p>© 2021 <a href="https://profile.u-say.ga/" target="_blank">U_SAY</a> All Rights Reserved.</p>
        <br>
      </ul>
    </footer>
</body>

</html>
