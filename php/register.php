<?php
    require("connect.php");

    $phone = $_POST["phone"];
    $pass = $_POST["pass"];
    
    //  连接数据库  
    mysql_select_db("myproject",$con);
    $insert_query = "INSERT INTO information
                    (phone,pass)
                    VALUES
                    ('$phone','$pass')
                    ";
    $insert_res = mysql_query($insert_query,$con);
    echo $insert_res . mysql_error();
    if(!$insert_res){
        die("数据库插入失败");
    }
    mysql_close($con);
?>