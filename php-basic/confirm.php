<?php
// POSTリクエストから入力データを取得
$name = $_POST['user_name'];
$age = $_POST['user_age'];
// $gender = $_POST['user_gender'];
$category = $_POST['category'];
// $message = $_POST['message'];


$_POST = [
    'user_name' => '侍太郎',
    'user_email' => 'samuraitarou@example.com',
    'user_gender' => '男性',
    'category' => 'ご意見やご感想',
    'message' => 'とても有意義な時間でした。また利用させていただきます。'
];

?>




<!-- <!DOCTYPE html> -->
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>お名前</td>
            <td><?php echo $name; ?></td>
        </tr>
        
        <tr>
            <td>性別</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>お問い合わせ種別</td>
            <td><?php echo $category; ?></td>
        </tr>
       
    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>
  
</body>

</html>
