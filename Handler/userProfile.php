<?php
/**
 * Created by PhpStorm.
 * User: Elaine
 * Date: 16/7/3
 * Time: 00:24
 */
$user_id = $_POST["user_id"];
require_once "DBConfig.php";

$activity_sql = "select activity.id as aid, topic.subject as tSubject, engineer.name as sponsorName, topic.tag as tag, activity.description as description,
activity.starttime as starttime, activity.location as location  from engineer,activitylist,activity,topic where engineer.id=activityList.user_id
and activityList.activity_id = activity.id and activity.topic=topic.id";

$user_sql=sprintf("select engineer.name as eName,engineer.email as eEmail,engineer.telephone as eTel,engineer.type as eType,engineer.company as eCompany from engineer where id='%s'",$user_id);
$activity_result = mysqli_query($conn, $activity_sql);
$user_result = mysqli_query($conn,$user_sql);

$userInfo = array();

if($user_result)
{
    $userInfo[]=array('name'=>$row['ename'],
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
        $status="还未举行";
        $activityList[]= array('id'=>$row['aid'],
            'topic'=>$row['tSubject'],
            'status' => $status,
            'sponsor' =>  $row['sponsorName'],
            'tag' => $row['tag'],
            'description' => $row['description'],
            'startTime' => $row['starttime'],
            'location' => $row['location'],
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


