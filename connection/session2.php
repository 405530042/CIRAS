<?php
require("connect.php");
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select * from culti_members where account like '$user_check'");
$row=mysql_fetch_assoc($ses_sql);
$account=$row['account'];
if(!isset($account)){
    mysql_close($connection);
    header("location: ../login2.html");
}
?>