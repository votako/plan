<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssInsert.css">

<?
// данные для подключения к БД
$hostname = "localhost";
$username = "root";
$password = "NIAP637";
$dbName = "plan";
$ito = "ito";

include 'funct.php';
$insertData = 'insertData';
$getData = 'getFromDb';

//подключение к SQL и DB
$connect = mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($dbName) or die(mysql_error());
//для записи в БД русских символов и корректного их отображения.
mysql_query('SET NAMES utf8');
// подключено
?>
    <html>
        <body>
            <form name="form" action="index.php">
<!--                 truncate table: <input type="checkbox" name="truncate" value="1"> -->
<!--                 <input type="submit" name="buttonT" value="OK" /> -->
            </form>
        </body>
    </html>

 
<?php 
// if($_REQUEST['truncate'] == '1'){
// 	mysql_query("TRUNCATE TABLE `ito`"); 
// }

$insertData();
?> 
