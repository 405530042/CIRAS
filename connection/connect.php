<?php
$connection = mysql_connect("localhost:8000", "agei", "1286@agei");
$db=mysql_select_db("agei", $connection);
mysql_query("set names utf8");
?>