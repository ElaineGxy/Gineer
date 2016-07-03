<?php
  require_once "DBConfig.php";

  $DB_TABLENAME='Topic';

  $subject = $_POST['subject'];
  $content = $_POST['content'];
  $sponsor = $_POST['sponsorID']; // sponsor id
  $type = $_POST['type'];
  $tag=$_POST['tag'];

   //mysql_connect
   $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_DATABASENAME);
   //读取表中纪录条数
   $sql = sprintf("insert into %s (subject, content, signupnum, sponsorID, receiverID, starttime, validate,tag, type) values ('%s','%s', 0, '%s', 0, ' ', -1,'%s', '%s')", $DB_TABLENAME, $subject,$content,$sponsor,$tag,$type);

    if(!mysqli_query($conn,$sql)){
        echo "fail";
    }else{
      $topic_id=mysqli_insert_id($conn);
     echo "success";
    }
    mysqli_close($conn);

    
?>

