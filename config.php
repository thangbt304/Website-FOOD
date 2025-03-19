<?php
    $host = 'localhost';//1
    $username = 'root';//2
    $password = '';//3
    $dbname = 'du_an1';//4
    //                          1        2          3         4
    $connection = mysqli_connect($host, $username, $password, $dbname);
    if(mysqli_connect_errno() != 0){
        echo 'LỖI KẾT NỐI';
    }

?>