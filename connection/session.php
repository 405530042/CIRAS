<?php
require("connect.php");
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select * from members where account like '$user_check'");
$row=mysql_fetch_assoc($ses_sql);
$user_id=$row['id'];
$account=$row['account'];
$name=$row['name'];
$right=$row['right'];
if(!isset($account)){
    mysql_close($connection);
    header("location: ../login.html");
}
else if(isset($_POST['edit'])){
    $article_id = $_POST['edit'];
    $_SESSION['revision']=$article_id;
    header("location: edit/edit_article.php");
}
else if(isset($_POST['delete'])){
    $article_id = $_POST['delete'];
    $article_query = mysql_query("select * from articles where id='$article_id'");
    $result_query = mysql_fetch_assoc($article_query);
    $download_files = $result_query['download_files'];
    if($download_files == 1){
        $picture_query = mysql_query("select * from files where author_id='$article_id'");
        $picture_result = mysql_fetch_assoc($picture_query);
        $replace_name = $picture_result['replace_name'];
        $targetFolder = '/uploads';
        $targetPath = $_SERVER['DOCUMENT_ROOT'].$targetFolder;
        $targetFile = rtrim($targetPath,'/').'/files/'.$replace_name;
        unlink($targetFile);
        mysql_query("delete from files where author_id='$article_id'");
    }
    mysql_query("delete from articles where id='$article_id'");
    header("location: login_myarticle.php");
}
else if (isset($_POST['send_c'])) {
	if (!isset($_POST['c_name']) || trim($_POST['c_name']) == ''){
        $error = "請輸入姓名";
    }else {
        $name_c = $_POST['c_name'];
        $profession = $_POST['c_profession'];
        mysql_query("insert into consultant value(NULL,'$name_c','$profession')");
		$error = "新增成功";
	}
}
else if(isset($_POST['edit_c'])){
    $consultant_id = $_POST['edit_c'];
    $_SESSION['revision_c']=$consultant_id;
    header("location: edit/edit_consultant.php");
}
else if(isset($_POST['delete_c'])){
    $consultant_id = $_POST['delete_c'];
    $consultant_query = mysql_query("select * from consultant where id='$consultant_id'");
    $result_query = mysql_fetch_assoc($consultant_query);
    mysql_query("delete from consultant where id='$consultant_id'");
    header("location: login_consultant.php");
}
else if (isset($_POST['send_collect'])) {
	if (!isset($_POST['c_title']) || trim($_POST['c_title']) == ''){
        $error = "請輸入標題";
    }else {
        $title_c = $_POST['c_title'];
        $links_c = $_POST['c_links'];
        mysql_query("insert into collection value(NULL,'$title_c','$links_c')");
		$error = "新增成功";
	}
}
else if(isset($_POST['edit_collect'])){
    $collection_id = $_POST['edit_collect'];
    $_SESSION['revision_collect']=$collection_id;
    header("location: edit/edit_collection.php");
}
else if(isset($_POST['delete_collect'])){
    $collection_id = $_POST['delete_collect'];
    $collection_query = mysql_query("select * from collection where id='$collection_id'");
    $result_query = mysql_fetch_assoc($collection_query);
    mysql_query("delete from collection where id='$collection_id'");
    header("location: login_collection.php");
}
else if(isset($_POST['edit_news'])){
    $news_id = $_POST['edit_news'];
    $_SESSION['revision_news']=$news_id;
    header("location: edit/edit_news.php");
}
else if(isset($_POST['delete_news'])){
    $news_id = $_POST['delete_news'];
    $news_query = mysql_query("select * from news where id='$news_id'");
    $result_query = mysql_fetch_assoc($news_query);
    mysql_query("delete from news where id='$news_id'");
    header("location: login_news.php");
}
else if(isset($_POST['submit'])){
    if(empty($_POST['pd'])||empty($_POST['password'])){
        $errorchange="欄位為空";
    }
    else{
        $pd = $_POST['pd'];
        $password = $_POST['password'];
        $old_pd = $row['password'];
        if($old_pd == $pd){
            mysql_query("update members set password='$password' where id like '$user_id'");
            $errorchange="已更改密碼";
        }
        else{
            $errorchange = "舊密碼錯誤";
        }
    }
}
?>