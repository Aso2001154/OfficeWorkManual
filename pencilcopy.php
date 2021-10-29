<?php //pencil.phpコピー　商品出力をphpで出す
$user_number = 0;
$user_number = @$_POST['user_number'];//データベースにデータを入れるまでこの行は消しておく
$action_login = '<form action="login_in.php" method="post">';
$action_cart = '<form action="cart.php" method="post">';
$action_information = '<form action="information.php" method="post">';
$action_history = '<form action="history.php" method="post">';
$form_login = '<p><button type="submit" class="btn">ログイン</button></p>';
$form_cart = '<p><button type="submit" class="btn" onclick="btnCheck()">カート</button></p>';
$form_information = '<p><button type="submit" class="btn" onclick="btnCheck()">会員情報</button></p>';
$form_history = '<p><button type="submit" class="btn" onclick="btnCheck()">履歴</button></p>';
$merchandise_img_login = '<p><button type="submit" name="merchandise_id" value="1" class="merchandise_img_btn" onclick="btnCheck()"><img src="img/シャーペン１.png" alt="商品画像" class="merchandise_img"></button></p>';
$merchandise_login = '<p><button type="submit" name="merchandise_id" value="1" class="merchandise_name_btn" onclick="btnCheck()">フィックス シャープペンシル<br>¥6,900</button></p>';
$merchandise_img_login1 = '<p><button type="submit" name="merchandise_id" value="2" class="merchandise_img_btn" onclick="btnCheck()"><img src="img/シャーペン２.png" alt="商品画像" class="merchandise_img"></button></p>';
$merchandise_login1 = '<p><button type="submit" name="merchandise_id" value="2" class="merchandise_name_btn" onclick="btnCheck()">LAMY シャープペンシル<br>¥2,750</button></p>';
$merchandise_img_login2 = '<p><button type="submit" name="merchandise_id" value="3" class="merchandise_img_btn" onclick="btnCheck()"><img src="img/シャーペン３.png" alt="商品画像" class="merchandise_img"></button></p>';
$merchandise_login2 = '<p><button type="submit" name="merchandise_id" value="3" class="merchandise_name_btn" onclick="btnCheck()">パーカー シャープペンシル<br>¥1,564</button></p>';
$merchandise_img_login3 = '<p><button type="submit" name="merchandise_id" value="4" class="merchandise_img_btn" onclick="btnCheck()"><img src="img/シャーペン４.png" alt="商品画像" class="merchandise_img"></button></p>';
$merchandise_login3 = '<p><button type="submit" name="merchandise_id" value="4" class="merchandise_name_btn" onclick="btnCheck()">WATERMAN メトロポリタンエッセンシャルブラックGTシャープペンシル<br>¥6,700</button></p>';
$merchandise_img_login4 = '<p><button type="submit" name="merchandise_id" value="5" class="merchandise_img_btn" onclick="btnCheck()"><img src="img/シャーペン５.png" alt="商品画像" class="merchandise_img"></button></p>';
$merchandise_login4 = '<p><button type="submit" name="merchandise_id" value="5" class="merchandise_name_btn" onclick="btnCheck()">Pilotレグノ シャープペンシル<br>¥2,750</button></p>';

if($user_number > 0){
    $action_login = '<form action="logout.php" method="post">';
    $form_login1 = '<p><button type="submit" class="btn">ログアウト</button></p>';
    $form_cart1 = '<p><button type="submit" class="btn">カート</button></p>';
    $form_information1 = '<p><button type="submit" class="btn">会員情報</button></p>';
    $form_history1 = '<p><button type="submit" class="btn">履歴</button></p>';
    $merchandise_img = '<p><button type="submit" name="merchandise_id" value="1" class="merchandise_img_btn"><img src="img/シャーペン１.png" alt="商品画像" class="merchandise_img"></button></p>';
    $merchandise = '<p><button type="submit" name="merchandise_id" value="1" class="merchandise_name_btn">フィックス シャープペンシル<br>¥6,900</button></p>';
    $merchandise_img1 = '<p><button type="submit" name="merchandise_id" value="2" class="merchandise_img_btn"><img src="img/シャーペン２.png" alt="商品画像" class="merchandise_img"></button></p>';
    $merchandise1 = '<p><button type="submit" name="merchandise_id" value="2" class="merchandise_name_btn">LAMY シャープペンシル<br>¥2,750</button></p>';
    $merchandise_img2 = '<p><button type="submit" name="merchandise_id" value="3" class="merchandise_img_btn"><img src="img/シャーペン３.png" alt="商品画像" class="merchandise_img"></button></p>';
    $merchandise2 = '<p><button type="submit" name="merchandise_id" value="3" class="merchandise_name_btn">パーカー シャープペンシル<br>¥1,564</button></p>';
    $merchandise_img3 = '<p><button type="submit" name="merchandise_id" value="4" class="merchandise_img_btn"><img src="img/シャーペン４.png" alt="商品画像" class="merchandise_img"></button></p>';
    $merchandise3 = '<p><button type="submit" name="merchandise_id" value="4" class="merchandise_name_btn">WATERMAN メトロポリタンエッセンシャルブラックGTシャープペンシル<br>¥6,700</button></p>';
    $merchandise_img4 = '<p><button type="submit" name="merchandise_id" value="5" class="merchandise_img_btn"><img src="img/シャーペン５.png" alt="商品画像" class="merchandise_img"></button></p>';
    $merchandise4 = '<p><button type="submit" name="merchandise_id" value="5" class="merchandise_name_btn">Pilotレグノ シャープペンシル<br>¥2,750</button></p>';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" charset="utf-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" >
    <link rel="stylesheet" href="css/top.css"> <!-- pencil.php、eraser.php、pen.php、ruler.php、office.php-->
    <title>シャーペン(ジャンル)</title>
    <script>
        let btnCheck = () =>{
            alert("ログインしないとクリックをすることはできません。");
        }
    </script>
</head>
<body>
<header class="header">
    <img src="img/header_name.png" alt="画像" class="header_name">
    <?php echo $action_login;?><!--ログインしていたらログアウトにとぶ-->
    <?php if(isset($form_login1)){echo $form_login1;}echo '</form>';?>

    <?php echo $action_login;?><!--ログインしていなかったらログインのボタンでログイン画面にとぶ-->
    <?php if(!isset($form_login1)){echo $form_login;}echo '</form>';?>

    <?php echo $action_cart;?><!--ログインしていたらカートにとぶ-->
    <?php echo '<input type="hidden" name="user_number" value="',$user_number,'">';?>
    <?php if(isset($form_cart1)){echo $form_cart1;}echo '</form>';?>

    <?php echo $action_login;?><!--ログインしていなかったらカートのボタンでログイン画面にとぶ-->
    <?php if(!isset($form_cart1)){echo $form_cart;}echo '</form>';?>

    <?php echo $action_information;?><!--ログインしていたら会員情報にとぶ-->
    <?php echo '<input type="hidden" name="user_number" value="',$user_number,'">';?>
    <?php if(isset($form_information1)){echo $form_information1;}echo '</form>';?>

    <?php echo $action_login;?><!--ログインしていなかったら会員情報のボタンでログイン画面にとぶ-->
    <?php if(!isset($form_information1)){echo $form_information;}echo '</form>';?>

    <?php echo $action_history;?><!--ログインしていたら履歴にとぶ-->
    <?php echo '<input type="hidden" name="user_number" value="',$user_number,'">';?>
    <?php if(isset($form_history1)){echo $form_history1;}echo '</form>';?>

    <?php echo $action_login;?><!--ログインしていなかったら履歴のボタンでログイン画面にとぶ-->
    <?php if(!isset($form_history1)){echo $form_history;}echo '</form>';?>
    <br><br>
</header>
<div class="genre_list">
    <form action="pencil.php" method="post"><?php echo '<input type="hidden" name="user_number" value="',$user_number,'">';?><button type="submit" value="send" class="genre" id="genre1">シャーペン</button></form><!--開いているジャンルのボタンは押せなくする(disabled)-->
    <form action="eraser.php" method="post"><?php echo '<input type="hidden" name="user_number" value="',$user_number,'">';?><button type="submit" value="send" class="genre" id="genre2">消しゴム</button></form>
    <form action="pen.php" method="post"><?php echo '<input type="hidden" name="user_number" value="',$user_number,'">';?><button type="submit" value="send" class="genre" id="genre3">ボールペン</button></form>
    <form action="ruler.php" method="post"><?php echo '<input type="hidden" name="user_number" value="',$user_number,'">';?><button type="submit" value="send" class="genre" id="genre4">定　　規</button></form>
    <form action="office.php" method="post"><?php echo '<input type="hidden" name="user_number" value="',$user_number,'">';?><button type="submit" value="send" class="genre" id="genre5">事務用品</button></form><br><br>
</div><br><br><br>
<?php
if(isset($form_login1)){
    echo '<form action="search.php" method="post">';
    echo '<div class="search_div"><input type="text" class="text" size="80" name="text"></div>';
    echo '<input type="hidden" name="user_number" value="',$user_number,'">';
    echo '<button type="submit" class="search_btn">検索</button>';
    echo '</form>';
}else{
    echo '<form action="login_in.php">';
    echo '<div class="search_div"><input type="text" class="text" size="80" name="text"></div>';
    echo '<button type="submit" class="search_btn" onclick="btnCheck()">検索</button>';
    echo '</form>';
}
?>
<br>
<p><img src="img/シャーペン背景 (2).png" alt="背景画像" class="back_img"></p>
<!--あとでここに商品詳細のフォームが一つでも行けるか試してみる-->
<div class="border_vertical" id="border">
    <?php
    echo '<form action="merchandise_detail.php" method="post">'; //ログインしていたら商品詳細にとぶ
    echo '<input type="hidden" name="genre_id" value="1">'; //valueの値をジャンルによって変える(1,2,3,4,5)
    echo '<input type="hidden" name="user_number" value="',$user_number,'">';
    if(isset($form_login1)){echo $merchandise_img;}echo '</form>';
    echo $action_login; //ログインしていなかったら商品画像のボタンでログイン画面にとぶ
    if(!isset($form_login1)){echo $merchandise_img_login;}echo '</form>';
    echo '<form action="merchandise_detail.php" method="post">'; //ログインしていたら商品詳細にとぶ
    echo '<input type="hidden" name="genre_id" value="1">'; //valueの値をジャンルによって変える(1,2,3,4,5)
    echo '<input type="hidden" name="user_number" value="',$user_number,'">';
    if(isset($form_login1)){echo $merchandise;}echo '</form>';
    echo $action_login; //ログインしていなかったら商品画像のボタンでログイン画面にとぶ
    if(!isset($form_login1)){echo $merchandise_login;}echo '</form>';

    echo '<form action="merchandise_detail.php" method="post">'; //ログインしていたら商品詳細にとぶ
    echo '<input type="hidden" name="genre_id" value="1">'; //valueの値をジャンルによって変える(1,2,3,4,5)
    echo '<input type="hidden" name="user_number" value="',$user_number,'">';
    if(isset($form_login1)){echo $merchandise_img1;}echo '</form>';
    echo $action_login; //ログインしていなかったら商品画像のボタンでログイン画面にとぶ
    if(!isset($form_login1)){echo $merchandise_img_login1;}echo '</form>';
    echo '<form action="merchandise_detail.php" method="post">'; //ログインしていたら商品詳細にとぶ
    echo '<input type="hidden" name="genre_id" value="1">'; //valueの値をジャンルによって変える(1,2,3,4,5)
    echo '<input type="hidden" name="user_number" value="',$user_number,'">';
    if(isset($form_login1)){echo $merchandise1;}echo '</form>';
    echo $action_login; //ログインしていなかったら商品画像のボタンでログイン画面にとぶ
    if(!isset($form_login1)){echo $merchandise_login1;}echo '</form>';

    echo '<form action="merchandise_detail.php" method="post">'; //ログインしていたら商品詳細にとぶ
    echo '<input type="hidden" name="genre_id" value="1">'; //valueの値をジャンルによって変える(1,2,3,4,5)
    echo '<input type="hidden" name="user_number" value="',$user_number,'">';
    if(isset($form_login1)){echo $merchandise_img2;}echo '</form>';
    echo $action_login; //ログインしていなかったら商品画像のボタンでログイン画面にとぶ
    if(!isset($form_login1)){echo $merchandise_img_login2;}echo '</form>';
    echo '<form action="merchandise_detail.php" method="post">'; //ログインしていたら商品詳細にとぶ
    echo '<input type="hidden" name="genre_id" value="1">'; //valueの値をジャンルによって変える(1,2,3,4,5)
    echo '<input type="hidden" name="user_number" value="',$user_number,'">';
    if(isset($form_login1)){echo $merchandise2;}echo '</form>';
    echo $action_login; //ログインしていなかったら商品画像のボタンでログイン画面にとぶ
    if(!isset($form_login1)){echo $merchandise_login2;}echo '</form>';
    ?>
</div>
<div class="border_vertical">
    <?php
    echo '<form action="merchandise_detail.php" method="post">'; //ログインしていたら商品詳細にとぶ
    echo '<input type="hidden" name="genre_id" value="1">'; //valueの値をジャンルによって変える(1,2,3,4,5)
    echo '<input type="hidden" name="user_number" value="',$user_number,'">';
    if(isset($form_login1)){echo $merchandise_img3;}echo '</form>';
    echo $action_login; //ログインしていなかったら商品画像のボタンでログイン画面にとぶ
    if(!isset($form_login1)){echo $merchandise_img_login3;}echo '</form>';
    echo '<form action="merchandise_detail.php" method="post">'; //ログインしていたら商品詳細にとぶ
    echo '<input type="hidden" name="genre_id" value="1">'; //valueの値をジャンルによって変える(1,2,3,4,5)
    echo '<input type="hidden" name="user_number" value="',$user_number,'">';
    if(isset($form_login1)){echo $merchandise3;}echo '</form>';
    echo $action_login; //ログインしていなかったら商品画像のボタンでログイン画面にとぶ
    if(!isset($form_login1)){echo $merchandise_login3;}echo '</form>';

    echo '<form action="merchandise_detail.php" method="post">'; //ログインしていたら商品詳細にとぶ
    echo '<input type="hidden" name="genre_id" value="1">'; //valueの値をジャンルによって変える(1,2,3,4,5)
    echo '<input type="hidden" name="user_number" value="',$user_number,'">';
    if(isset($form_login1)){echo $merchandise_img4;}echo '</form>';
    echo $action_login; //ログインしていなかったら商品画像のボタンでログイン画面にとぶ
    if(!isset($form_login1)){echo $merchandise_img_login4;}echo '</form>';
    echo '<form action="merchandise_detail.php" method="post">'; //ログインしていたら商品詳細にとぶ
    echo '<input type="hidden" name="genre_id" value="1">'; //valueの値をジャンルによって変える(1,2,3,4,5)
    echo '<input type="hidden" name="user_number" value="',$user_number,'">';
    if(isset($form_login1)){echo $merchandise4;}echo '</form>';
    echo $action_login; //ログインしていなかったら商品画像のボタンでログイン画面にとぶ
    if(!isset($form_login1)){echo $merchandise_login4;}echo '</form>';
    ?>

</div>
</body>
</html>