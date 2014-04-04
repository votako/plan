<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssGet.css">

<a href="done/sh.php">sh</a><br>
<a href="it.php">it</a><br>
<a href="index.php">localhost</a><br>
<?
// данные для подключения к БД
$hostname = "localhost";
$username = "root";
$password = "NIAP637";
$dbName = "plan";
$ito = "ito";

//подключение к SQL и DB
$connect = mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($dbName) or die(mysql_error());
//для записи в БД русских символов и корректного их отображения.
mysql_query('SET NAMES utf8');
// подключено

$get = mysql_query("select * from ito where date = '1-1' and id = '1'");
while($row = mysql_fetch_array($get)){
	$hight = $row['hight'];
}
$doneH = "qwe";
mysql_query("update ito set doneH = '$doneH' where date = '1-1' and id ='1'");
?>