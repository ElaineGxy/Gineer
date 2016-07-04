<?php
/**
 * Created by PhpStorm.
 * User: Elaine
 * Date: 16/7/3
 * Time: 00:24
 */
$user_id = $_GET["user_id"];
require_once "DBConfig.php";

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASENAME) or die("connect failed" . mysqli_error());

$activity_sql = "select activity.id as aid, topic.subject as tSubject, engineer.name as sponsorName, topic.tag as tag, activity.description as description,
activity.starttime as starttime, activity.location as location  from engineer,activitylist,activity,topic where engineer.id=activityList.user_id
and activityList.activity_id = activity.id and activity.topic=topic.id";

$user_sql=sprintf("select engineer.name as eName,engineer.email as eEmail,engineer.telephone as eTel,engineer.type as eType,engineer.company as eCompany from engineer where id='%s'",$user_id);
$activity_result = mysqli_query($conn, $activity_sql);
$user_result = mysqli_query($conn,$user_sql);

$userInfo = array();

$row = mysqli_fetch_array($user_result);

if($user_result)
{
    $userInfo[]=array('name'=>$row['eName'],
        'email' => $row['eEmail'],
        'telephone' =>  $row['eTel'],
        'type' => $row['eType'],
        'company' => $row['eCompany'],
    );
}
$json1=json_encode($userInfo);

$activityList=array();
if ($activity_result)
{
    while($row = mysqli_fetch_array($activity_result))
    {
        $activity_id = $row['aid'];
        $other_sql=sprintf("select count(*) from activityList where id = '%s'", $activity_id);
        $user_count = mysqli_query($conn,$other_sql);
        $status="还未举行";
        $activityList[]= array('id'=>$row['aid'],
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
$json2=json_encode($activityList);
$newJson = json_encode(
    array_merge(
        json_decode($json1, true),
        array('activityList' => json_decode($json2, true) )
    )
);
echo $newJson;
mysqli_close($conn);  


