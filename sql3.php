<?php

    //连接数据库
    $mysqli = new mysqli("localhost", "root", "root", "shop");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo "连接成功";echo '<br>';

    echo "未经处理的参数：".$_GET['c_name'];echo '<br>';
    $c_name=$_GET['c_name'];
    echo "经过处理接到的参数：".$c_name;echo '<br>';

    //sql语句
    $sql="select * from c_users where c_users='{$c_name}'";
    echo "".$sql;echo '<br>';

    //执行sql语句
    $res=$mysqli->query($sql);
    echo '<hr>';

    //遍历数据
    while($row=$res->fetch_assoc())
    {
        echo '<pre>';print_r($row);echo '</pre>';
    }