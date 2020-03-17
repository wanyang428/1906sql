<?php

    //连接数据库
    $mysqli = new mysqli("localhost", "root", "root", "shop");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo "连接成功";echo '<br>';

    $c_id=$_GET['c_id'];
    echo "未经处理的参数：".$c_id;echo '<br>';
    $c_id=intval($c_id);
    echo "经过处理接到的参数：".$c_id;echo '<br>';

    //sql语句
    $sql="select * from c_users where c_id=".$c_id;
    echo " ".$sql;echo '<br>';

    //执行sql语句
    $res=$mysqli->query($sql);
    echo '<hr>';

    //遍历数据
    while($row=$res->fetch_assoc())
    {
        echo '<pre>';print_r($row);echo '</pre>';
    }