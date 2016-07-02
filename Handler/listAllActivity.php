<?php
/**
 * Created by PhpStorm.
 * User: Elaine
 * Date: 16/7/2
 * Time: 19:14
 */
require_once "DBConfig.php";

$DB_TABLENAME='Activity';

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASENAME) or die("connect failed" . mysqli_error());

$arrayList = array();

//读取表中纪录条数
$sql = "select activity.id as aid, topic.subject as tSubject, engineer.name as sponsorName, topic.tag as tag, activity.description as description,
activity.starttime as starttime, activity.location as location from activity, topic,engineer where activity.topic=topic.id and activity.sponsor=engineer.id";
$result = mysqli_query($conn, $sql);
if ($result)
{
    while($row = mysqli_fetch_array($result))
    {
        $activity_id = $row['aid'];
        $other_sql=sprintf("select count(*) from activityList where id = '%s'", $activity_id);
        $user_count = mysqli_query($conn,$other_sql);
        $curTime = time();
        $curDayTime = date("y-m-d", $curTime);
        
        if($row['starttime'] > $curDayTime) {
            $status = "还未举行";
        }else if($row['starttime'] == $curDayTime) {
            $status = "正在举行";
        }
        else {
            $status = "已经结束";
        }
        $arrayList[]= array('id'=>$activity_id,
            'topic'=>$row['tSubject'],
            'status' => $status,
            'sponsor' =>  $row['sponsorName'],
            'tag' => $row['tag'],
            'description' => $row['description'],
            'startTime' => $row['starttime'],
            'location' => $row['location'],
            'user_count' =>  $user_count,
        );
    }

}
else
{
    echo "efg";
    die("query failed");

}
echo json_encode($arrayList);