<?php
  require_once "DBConfig.php";
  session_start();

  $DB_TABLENAME='Topic';

  $subject = $_POST['subject'];
  $content = $_POST['content'];
  $sponsor = $_SESSION['name'];
  $


  //
   //mysql_connect
   $conn = mysql_connect($DB_HOST, $DB_USER, $DB_PASS) or die("connect failed" . mysql_error());
   mysql_select_db($DB_DATABASENAME, $conn);

   //读取表中纪录条数
   $sql = sprintf("select * from %s where name = '%s'", $DB_TABLENAME, $name);
   $result = mysql_query($sql, $conn);
?>