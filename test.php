<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/cssGetSh.css">
<?
// данные для подключения к БД
$hostname = "localhost";
$username = "root";
$password = "NIAP637";
$dbName = "plan";
$ito = "ito";
$date = '';
//подключение к SQL и DB
$connect = mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($dbName) or die(mysql_error());
//для записи в БД русских символов и корректного их отображения.
mysql_query('SET NAMES utf8');
// подключено

//get funct
include 'funct/funct.php';

$getAllMonthCheck0 = 'getAllMonthCheck0';
// $getAllMonthCheck1 = 'getAllMonthCheck1';
?>
<form method="post" action="test.php">
	<input type="checkbox" name="setCh" value="0">
	<input value="set check=0" type="submit"><hr>
</form>
<a href="index.php">localhost</a><br>
<?
$setCheck = isset($_POST['setCh']);
if($setCheck == 1){
// 	mysql_query("update ito set `check` = 0 where `check` = 1");
}

$get = mysql_query("select * from ito order by date DESC");
while($row = mysql_fetch_array($get)){
	$date = $row['date'];
}
$check = $_POST['check'];
$ShCommit = $_POST['ShCommit'];
// echo $date;
if($check == 0){
// 		echo $date;
// 	mysql_query("UPDATE $ito SET `check` = 1 WHERE date = '$date' ") or DIE(mysql_error());
	echo $date;
}
?>
	
<form method="post" action="test.php">
	<textarea name='ShCommit' cols='41' rows='1'></textarea>
	<input type="checkbox" name="check" value="0">
	<input value="Проверено" type="submit"><hr>
</form>
