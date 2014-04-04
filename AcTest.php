<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssGet.css">
<a href="test.php">back</a><br>
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


?>