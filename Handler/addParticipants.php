<?php
require_once "DBConfig.php";

$DB_TABLENAME='activityList';
$activity_id = $_POST['activity_id'];
$user_id =$_POST['user_id'];
//mysql_connect
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_DATABASENAME);
//读取表中纪录条数
$sql = sprintf("insert into %s (activity_id,user_id) values ('%s','%s')", $DB_TABLENAME, $activity_id,$user_id);
if(!mysqli_query($conn,$sql)){
    die('Error:');
    echo "fail";
}
echo "success";
?>