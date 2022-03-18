<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>セキュリティーエラー</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://bitlinker.usay05.com/warning/css/main.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>

<?php
//現在のURLを取得
$url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
//リダイレクト先URL
$redirect_url = "";
?>

<body class="p-3 mb-2 bg-danger text-white">
    <div id="content">

        <img src="https://bitlinker.usay05.com/warning/img/warning.svg" width="10%" alt="WARNING" />
        <h1>危険なサイトにリダイレクトする可能性があります</h1>
        <p>
            <?php echo ($url) ?> は，<b><?php echo ($redirect_url) ?></b>
            へリダイレクトしようとしています．このサイトでは，悪意のあるユーザーによって，個人情報（パスワード，電話番号，クレジットカード情報 など）の入力といった危険な操作を行うよう誘導される可能性があります．
        </p>

        <button type="button" class="btn btn-outline-light"
            onclick="location.href='<?php echo ($redirect_url) ?>'">リスクを承知でアクセスする</button>
        <button type="button" class="btn btn-outline-light"
            onclick="location.href='https://google.com'">安全なページへ戻る</button>

    </div>
</body>

</html>