<?php
    header("Content-Type: text/html;charset=utf-8");
    ### 概述： mysql_connect 连接数据库用的;
    ### 参数共有3个  1.连接名称：localhost[:3307]
    ###             2.用户账号：root；
    ###             3.用户密码：root;
    ### 返回值 为新类型 resource(资源);

    $con = mysql_connect("localhost","root","root");
    //  $con 连接成功时： resource
    //       连接失败时： 0
    if(!$con){
        die("数据库连接失败".mysql_error());
    }
?>