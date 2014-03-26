<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssGet.css">
<?
// подключаем файл с функциями
include 'funct.php';
$getData = 'getFromDb';

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

// получаем даты из БД(без дублей(DISTINCT), отсортированное по дате от последней)
$print = mysql_query("SELECT DISTINCT date, month, year FROM $ito ORDER BY date DESC");
while($row = mysql_fetch_array($print)){
	$month = $row['month'];
	echo $db_allDate = $row['date'].".".$row['month'].".".$row['year'].".<br>";
}
//$getData('ito', $db_date);
?>