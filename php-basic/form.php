<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
<body>
    <h2>社員情報入力フォーム</h2>
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>社員名</td>
                <td>
                    <input type="text" name="user_name">
                </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>
                    <input type="text" name="user_age">
                </td>
            </tr>
            
            <!-- </tr> -->
            <tr>
                <td>お問い合わせ種別</td>
                <td>
                    <select name="category">
                        <option value="開発部">開発部</option>
                        <option value="営業部">営業部</option>
                        <option value="人事部">人事部</option>
                    </select>
                </td>
            </tr>
           
            <!-- </tr>  -->
        </table>
        <input type="submit" value="送信">
    </form>
</body>
 
</html>
