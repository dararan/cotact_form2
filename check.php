<?php
    $nickname=$_POST['nickname'];
    $email=$_POST['email'];
    $content=$_POST['content'];

    if($nickname==''){
        $nickname_result='ニックネームが入力されていません。';
    }else{
        $nickname_result='ようこそ。'.$nickname.'様';
    }

    if($email==''){
        $email_result='ニックネームが入力されていません。';
    }else{
        $email_result='メールアドレス:'.$nickname.'様';
    }

    if($content==''){
        $content_result='お問い合わせ内容が入力されていません。';
    }else{
        $content_result='お問い合わせ内容:'.$content;
    }
    ?>



    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <title>入力画面</title>
        <meta charset="utf-8"
    </head>
    <body>
        <h1>入力内容確認</h1>
        <p><?php echo $nickname_result;?></p>
        <p><?php echo $email_result;?></p>
        <p><?php echo $content_result;?></p>
    </body>
    </html>