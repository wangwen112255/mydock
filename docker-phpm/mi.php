<?php


//$dsn = "mysql:host=mydb:3306;dbname=homestead";//这就是数据源,
//$user = "root";//这个是服务器的账号，我的电脑上是这样，就不知道你们的是不是，
//$pwd = "secret";//这是我电脑上的服务器密码,就是我没设
//$pdo = new PDO($dsn, $user, $pwd);//
//foreach ($pdo->query('select * from lsky_link') as $row) {
//    print_r($row);
//}



//echo 'dfa';
$servername = "mydb";
$username = "root";
$password = "secret";

// 创建连接
$conn = new mysqli($servername, $username, $password,'homestead');

// 检测连接
if ($conn->connect_error) {

    die("连接失败: " . $conn->connect_error);
}


// 获取查询结果
$strsql="select * from lsky_link";
$result=mysqli_query($conn,$strsql);
var_dump($result);
die;
foreach($result as $row) {
    print_r($row);
}
//var_dump($result);
?>
