<?php
  require_once "DBConfig.php";

  $DB_TABLENAME='Topic';

  $subject = $_POST['subject'];
  $content = $_POST['content'];
  $sponsor = $_POST['sponsorID']; // sponsor id
  $type = $_POST['type'];

   //mysql_connect
   $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_DATABASENAME);
   //读取表中纪录条数
   $sql = sprintf("insert into %s (subject, content, signupnum, sponsorID, receiverID, starttime, validate, type) values ('%s','%s', 0, '%s', 0, ' ', -1, 0)", $DB_TABLENAME, $subject,$content,$sponsor);
    if(!mysqli_query($conn,$sql)){
        die('Error:');
    }
    $topic_id=mysqli_insert_id($conn);
    mysqli_close($conn);
    echo $topic_id;
?>

