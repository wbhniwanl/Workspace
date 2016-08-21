<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/16
 * Time: 10:57
 */
//PDO预处理类statement
//只需要提交一条语句之后只需要传递数值就可以
//安全性更高
//编译一次多次执行
//所以的sql语句都可以用预处理来实现
try {
    $pdo = new PDO("mysql:host=192.168.195.128;dbname=studentTWo", "root", "root");
} catch (PDOException $e) {
    echo $e->getMessage();
}
/**
 * PDO中有两种站位符号
 * ？参数 //索引数组(按顺序使用)
 * ：名子参数 （以冒号开头）//关联数组，按名称使用。和顺序无关
 */
//$pdo->exec();
//$pdo->query();
//$pdo->prepare("select * from zhangHAo"); //所以的sql语句都可以执行
//装备好了一条语句，并入到服务器端，也已经编译过来了，就差为它分配数据

//$stm = $pdo->prepare("insert into zhangHao(name,price) VALUES (:name,:price)");

$stm = $pdo->prepare("insert into zhangHao(name,price) VALUES (?,?)");
$stm = $pdo->prepare("update zhangHao set name=:name,price=:price"); //可以再加一个where id=:id
$stm->execute($_POST); //获取的数据直接插入到数据库中
//不需要的捆绑也可以直接进行sql语句的执行
//名子站位//关联数组
$stm->execute(array(":name" => 4564, ":price" => 456));
//索引数组 ？问好参数
$stm->execute(array("ddd", 45));
//都是使用数组
//用bindParam()绑定数据用名子站位
/**
 * 名子绑定
 */

/*$stm->bindParam(":name", $name);
$stm->bindParam(":price", $price);
$stm->execute();
$name  = "111";
$price = "111";*/
/**
 * ？参数绑定  按照？的顺序
 */
$stm->bindParam(1, $name); //$name第一个问好
$stm->bindParam(2, $price); //price第二个问好
$stm->execute();
$name  = "1112";
$price = "1112";
if ($stm->execute()) {
    echo "成功";
} else {
    echo "失败";
}
//var_dump($pdo);
//select 可以用fetch来获取一条信息 或有fetchAll()
$stm = $pdo->prepare("select *  from zhangHao where id=:id order by id");
$stm->bindColumn(":name", $name, PDO::PARAM_INT);
$stm->execute(array(":id" => 100));
//while($stm->ferch()){
//
//}
