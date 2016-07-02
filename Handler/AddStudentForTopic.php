<?php
/**
 * Created by PhpStorm.
 * User: jimmycai
 * Date: 16/7/2
 * Time: 下午8:00
 */
require_once "DBConfig.php";
$TOPIC_TABLENAME='topic';
$ACTIVITY_TABLENAME = 'activity';
$topicId = $_POST["topicId"];
$startTime = $_POST["startTime"];
$location = $_POST["location"];

//mysql_connect
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_DATABASENAME);
mysqli_select_db($conn,$DB_DATABASENAME);
//读取表中纪录条数
$sql = sprintf("select * from %s where id = '%s'", $TOPIC_TABLENAME, $topicId);
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Message: get topic failed");
}
$row = mysqli_fetch_array($result);
$description = $row['content'];
$sponsor = $row['sponsorID'];

$updateSql = sprintf("update %s set signupnum = 1, validate = 1 where id = '%s'", $TOPIC_TABLENAME, $topicId);
if(!mysqli_query($conn,$updateSql)){
    die("Message: update topic error.");
}

$insertActivitySql = sprintf("insert into %s (topic, startTime, location, description, sponsor) values ('%s', '%s', '%s', '%s', '%s')", $ACTIVITY_TABLENAME,$topicId,$startTime,$location,$description,$sponsor);
echo  $insertActivitySql;
mysqli_query($conn,"set names gbk");
mysqli_query($conn,"set character_set_client=utf8");
mysqli_query($conn,"set character_set_results=utf8");
if(!mysqli_query($conn,$insertActivitySql)) {
    die("Message:insert activity error.");
}
$activityId = mysqli_insert_id($conn);

mysqli_close($conn);
echo "activityId:" + $activityId;
?>