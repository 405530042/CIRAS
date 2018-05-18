<?php
require('connect.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['password']) || trim($_POST['password']) == ''){
        echo 'pd_empty';
    }else if (!isset($_POST['user']) || trim($_POST['user']) == ''){
        echo 'user_empty';
    }else{
        $user = $_POST['user'];
        $password = $_POST['password'];
        $query=mysql_query("select account from culti_members where password like '$password' AND account like '$user'");
        $r = mysql_num_rows($query);
        if($r == 1){
            session_start();
            $_SESSION['login_user']=$user;
            echo 'ok';
        }
        else {
            $query=mysql_query("select * from culti_members where account like '$user'");
            $r = mysql_num_rows($query);
            if($r == 1){
                echo 'pd_error';
            }
            else{
                echo 'not_exist';
            }
        }
        mysql_close($connection);
    }
}
?>