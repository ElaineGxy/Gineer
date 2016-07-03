<?php

  include "User.php";
  require_once "DBConfig.php";
  session_start();

  $DB_TABLENAME='engineer';

  $name = $_POST['name'];
  $pass = $_POST['password'];

  //
   //mysql_connect
   $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASENAME) or die("connect failed" . mysqli_error());
   mysqli_select_db($conn,$DB_DATABASENAME);

   //读取表中纪录条数
   $sql = sprintf("select * from %s where name = '%s'", $DB_TABLENAME, $name);
   $result = mysqli_query($conn, $sql);
   if ($result)
	   $row = mysqli_fetch_array($result);
   else
	    die("query failed");
  $user_id = $row['id'];
  $checkpass = $row['password'];
  
  if ( $checkpass == $pass ) {
  	 echo $user_id;
     $user = new User($name,$pass,$user_id);
     $saveUser = serialize($user);
     $_SESSION['user']=$saveUser;
  }
  else
  	echo "fail";
?>