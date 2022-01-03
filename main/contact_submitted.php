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
    $report_file = $directory."enquiry".$filecount.".txt";
    touch($report_file);

    //書き込み用メッセージ作成
    $message = "タイムスタンプ：".$_SERVER['REQUEST_TIME']."\n\nお名前：".$name."\nメールアドレス："."$email"."\nお問い合わせ内容：".$content."\n\nIPアドレス：".$_SERVER['HTTP_X_FORWARDED_FOR'];

    //書き込み
    file_put_contents($report_file, $message);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>BitLinker - 登録不要・純国産のカスタム短縮URL作成サービス｜Contact</title>
    <link rel="shortcut icon" href="./img/icon.ico">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/input.css">
    <link rel="stylesheet" href="./css/submit.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- JavaScript -->
    <script type="text/javascript" src="./js/input.js"></script>
    <!-- Googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <!-- Googleアドセンス -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7363201401295069" crossorigin="anonymous"></script>
    <script data-ad-client="ca-pub-7363201401295069" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- OGP設定 -->
    <meta property="og:title" content="BitLinker - 登録不要・純国産のカスタム短縮URL作成サービス">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bitlinker.usay05.com">
    <meta property="og:image" content="https://bitlinker.usay05.com/img/ogp_1200x630.png">
    <meta property="og:site_name" content="BitLinker - 登録不要・純国産のカスタム短縮URL作成サービス">
    <meta property="og:description" content="完全無料＆登録不要で btln.ga/ から始まるカスタム短縮URLを作成することができます。SSL（https://~）対応＆全データ日本国内にあるサーバーで厳重に保管されているため、安心してお使いいただけます！">
    <!-- Twitterカード -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@BitLinker_jp">
    <meta name="twitter:url" content="https://bitlinker.usay05.com">
    <meta name="twitter:domain" content="bitlinker.usay05.com">
    <meta name="twitter:title" content="BitLinker - 登録不要・純国産のカスタム短縮URL作成サービス">
    <meta name="twitter:description" content="完全無料＆登録不要で btln.ga/ から始まるカスタム短縮URLを作成することができます。SSL（https://~）対応＆全データ日本国内にあるサーバーで厳重に保管されているため、安心してお使いいただけます！">
    <meta name="twitter:image" content="https://bitlinker.usay05.com/img/ogp_1200x630.png">
    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdnL_4bAAAAAF_bfxYIKefhX5wgvcdfg6mtd9D7"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute("6LdnL_4bAAAAAF_bfxYIKefhX5wgvcdfg6mtd9D7", {
                action: "sent"
            }).then(function(token) {
                var recaptchaResponse = document.getElementById("recaptchaResponse");
                recaptchaResponse.value = token;
            });
        });

    </script>
</head>

<body>
    <!-- アクセス解析 -->
    <script src="//accaii.com/bitlinker/script.js" async></script>
    <noscript><img src="//accaii.com/bitlinker/script?guid=on"></noscript>

    <!-- ナビゲーション -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #83cc97;">
        <div class="container-xl">

            <a class="navbar-brand" href="./index">
                <img src="./img/logo.png" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07XL">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="./index">ホーム</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="./delete">短縮URLを削除</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about">BitLinkerについて</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./reviews">利用者様の声</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">セキュリティ</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                            <li><a class="dropdown-item" href="./bug_report">バグ・脆弱性報告</a></li>
                            <li><a class="dropdown-item" href="./url_report">短縮URL報告</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">ご利用にあたって</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                            <li><a class="dropdown-item" href="./terms">利用規約</a></li>
                            <li><a class="dropdown-item" href="./disclaimer">免責事項</a></li>
                            <li><a class="dropdown-item" href="./privacy_policy">プライバシーポリシー</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact">お問い合わせ</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- コンテンツ -->
    <div class="flex">
        <div class="flex_txt">
            <h1>お問い合わせ</h1>
            <br>

            <?php
//reCAPTCHA
if (isset($_POST["recaptchaResponse"]) && !empty($_POST["recaptchaResponse"])) {
    $secret = "6LdnL_4bAAAAAInCNLAIonXytFBrwAxPMKI40fUq";
    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST["recaptchaResponse"]);
    $reCAPTCHA = json_decode($verifyResponse);
    if ($reCAPTCHA->success) {
        if (empty($name)) {
            echo "<p>お名前を入力してください。</p>";
        } else {
            $name_c = 'ok';
        }
        if (empty($email)) {
            echo "<p>メールアドレスを入力してください。</p>";
        } elseif (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $email)) {
            $email_c = 'ok';
        } else {
            echo "<p>メールアドレスを正しく入力してください。</p>";
        }
        if (empty($content)) {
            echo "<p>お問い合わせ内容を入力してください。</p>";
        } else {
            $content_c = 'ok';
        }
        if ($name_c == 'ok' && $email_c == 'ok' && $content_c == 'ok') {
            echo "<p>お問い合わせありがとうございます！<br>内容を確認し、ご連絡します。<br>しばらくお待ち下さい。</p>";
            enquiry();
        }
    } else {
        echo "<p>エラーが発生しました。もう一度試してください。</p>";
    }
} else {
    echo "<p>エラーが発生しました。もう一度試してください。</p>";
}
?>

            <a href="./contact"><input type="submit" value="戻る" class="button"></a>
        </div>
        <div class="flex_img">
            <img src="./img/contact.svg">
        </div>
    </div>
    <hr>

    <div class="flex">
        <div class="flex_img">
            <img src="./img/shorten.svg">
        </div>
        <div class="flex_txt">
            <h1>URLを短縮する！</h1>
            <br>
            <form action="./shorten" method="post">
                <input type="url" name="url" class="inText" id="inText1" placeholder="短縮したいURLを入力してください" onblur="coloeSet(this)" onfocus="colorReset(this)" required="">
                <br><br>
                <input type="text" name="keyword" pattern="^[一-龠ぁ-んーァ-ヶー0-9０-９a-zａ-ｚA-ZＡ-Ｚ\-_\.]+$" title="使用できる文字は、半角英数字・全角ひらがな・全角カタカナ・漢字・-（ハイフン）・_（アンダーバー）.(ドット)です。" class="inText" id="inText2" placeholder="キーワードを入力してください" onblur="coloeSet(this)" onfocus="colorReset(this)" required="">
                <br><br>
                <input type="submit" value="短縮する！" class="button">
            </form>
            <br>
            <p>※「短縮する！」ボタンを押した時点で、<a href="./terms">利用規約</a>, <a href="./disclaimer">免責事項</a>, <a href="./privacy_policy">プライバシーポリシー</a>に同意したものとみなします。</p>
        </div>
    </div>

    <!-- 広告 -->
    <!-- Moons APPS ad start -->
    <script class="moons_apps_ad_banner moons_apps_ad_auto" src="https://apps.moons14.com/ad/js/banner.js"></script>
    <!-- Moons APPS ad end -->

    <hr>

    <!-- フッター -->
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-2">
                    <h5>メイン</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="./index" class="nav-link p-0 text-muted">ホーム</a></li>
<li class="nav-item mb-2"><a href="./delete" class="nav-link p-0 text-muted">短縮URLを削除</a></li>
                        <li class="nav-item mb-2"><a href="./about" class="nav-link p-0 text-muted">BitLinkerについて</a></li>
                        <li class="nav-item mb-2"><a href="./reviews" class="nav-link p-0 text-muted">利用者様の声</a></li>
                        <li class="nav-item mb-2"><a href="./contact" class="nav-link p-0 text-muted">お問い合わせ</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h5>セキュリティ</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="./bug_report" class="nav-link p-0 text-muted">バグ・脆弱性報告</a></li>
                        <li class="nav-item mb-2"><a href="./url_report" class="nav-link p-0 text-muted">短縮URL報告</a></li>
                        <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">ホワイトハッカー</a></li> -->
                    </ul>
                </div>

                <div class="col-2">
                    <h5>ご利用にあたって</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="./terms" class="nav-link p-0 text-muted">利用規約</a></li>
                        <li class="nav-item mb-2"><a href="./disclaimer" class="nav-link p-0 text-muted">免責事項</a></li>
                        <li class="nav-item mb-2"><a href="./privacy_policy" class="nav-link p-0 text-muted">プライバシーポリシー</a></li>
                    </ul>
                </div>

                <div class="col-4 offset-1">
                    <a href="./index"><img src="./img/logo.png" width="100%"></a>
                    <br><br>
                    <p>© 2021 <a href="https://www.usay05.com/" target="_blank">U_SAY</a> All Rights Reserved.</p>

                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col">
                                <p>Illustrations by <a href="https://storyset.com" target="_blank">Storyset</a></p>
                            </div>
                            <div class="col">
                                <ul class="follow-me">
                                    <li><a href="https://twitter.com/sekaino_usay" target="_blank"></a></li>
                                    <li><a href="https://github.com/sekaino-usay" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>
</body>

</html>
