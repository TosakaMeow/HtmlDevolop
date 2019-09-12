<link rel="stylesheet" type="text/css" href="allStyle.css">
<script src="JsData.js"></script>
<?php
    $account=$_POST["Account"];
    $password=$_POST["PassWord"];
    $name=$_POST["name"];
    $email=$_POST["userEmail"];
    echo "你的账号是:";
    echo "$account";
    echo "密码是";
    echo "$password";
    echo "$name";


/*$servername = "127.0.0.1:3306";
$username = "root";
$password = "wanghao123.";

// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";
*/
?>
<!--<body style="text-align: center">
    <p style="font-size: 50px">登录成功！</p><br>
    <a href="../userHtml/userInfo.html" style="text-decoration: none;font-size: 20px">确认信息</a>
    -->
</body>
