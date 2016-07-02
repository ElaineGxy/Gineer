<?php
/**
 * Created by PhpStorm.
 * User: Elaine
 * Date: 16/7/2
 * Time: 22:19
 */
$type=$_POST['type'];

require_once "DBConfig.php";

$DB_TABLENAME='topic';

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASENAME) or die("connect failed" . mysqli_error());

$arrayList = array();

//读取表中纪录条数
$sql = sprintf("select topic.id as tid,topic.subject as tSubject,engineer.name as sponsorName,engineer.telephone as tel,topic.tag as tag,topic.content as description,topic.starttime as starttime, topic.validate as validate from topic,engineer where topic.sponsorID=engineer.id and topic.type = '%s'",$type);
$result = mysqli_query($conn, $sql);
if ($result)
{
    while($row = mysqli_fetch_array($result))
    {
        $validate=$row['validate'];
        //echo "abc";
        if($validate !="-1"){
            $status="等待中";
        $arrayList[]= array('topic'=>$row['tSubject'],
            'sponsor' =>  $row['sponsorName'],
            'tag' => $row['tag'],
            'description' => $row['description'],
            'startTime' => $row['starttime'],
            'tel' => $row['tel'],
        );
        }
    }

}
else
{
    echo "efg";
    die("query failed");

}
echo json_encode($arrayList);
