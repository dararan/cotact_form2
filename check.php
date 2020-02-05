<?php
// require_once('function.php')

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

    if($_SERVER['REQUEST_METHOD']==='GET'){
        header('Location: index.php');
    }

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
        <meta charset="utf-8">
    </head>
    <body>
        <h1>入力内容確認</h1>
        <p><?php echo h($nickname_result);?></p>
        <p><?php echo h($email_result);?></p>
        <p><?php echo h($content_result);?></p>

    <form method="POST" action="thanks.php">
        <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">
        <input type="button" value="戻る" onclick="history.back()">
        <?php if($nickname !=''&& $email !=''&& $content !=''):?>
        <!-- //ok表示 -->
        <input type="submit" value="OK">
        <?php endif; ?>
    </form>
    </body>
    </html>