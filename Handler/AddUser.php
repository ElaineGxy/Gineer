<?php
/**
 * Created by PhpStorm.
 * User: jimmycai
 * Date: 16/7/3
 * Time: 上午1:20
 */
require_once "DBConfig.php";
$USER_TABLENAME = 'engineer';
$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];
$telephone = $_GET['telephone'];
$company = $_GET['company'];
$position = $_GET['position'];
$type = $_GET['type'];
$idno = $_GET['idno'];

//mysql_connect
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_DATABASENAME);
mysqli_select_db($conn,$DB_DATABASENAME);

$insertUserSql = sprintf("insert into %s (name, email, password, telephone, company, position, type, idno) values ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')", $USER_TABLENAME,$name, $email, $password, $telephone, $company, $position, $type, $idno);
echo  $insertUserSql;
if(!mysqli_query($conn,$insertUserSql)) {
    die("Message:insert user error.");
}
$userId = mysqli_insert_id($conn);

mysqli_close($conn);
echo "userId:" + $userId;
?>