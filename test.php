<!-- 	подключение css и установка кодировки. в базе данных  -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssGet.css">
<a href="index.php"><img src="topol.png"></a>
<a href="it.php"><img src="it.png"></a>
<a href="sh.php"><img src="sh.png"></a>
<a href="test.php"><img src="test.png"></a>
<?
// данные для подключения к БД
$hostname = "localhost";
$username = "root";
$password = "NIAP637";
$dbName = "plan";

//подключение к SQL и DB
mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($dbName) or die(mysql_error());
//для записи в БД русских символов и корректного их отображения.
mysql_query('SET NAMES utf8');
// подключено
$dep = $_POST['departament'];
@$check = $_POST['check'];
@$ShCommit = $_POST['ShCommit'];
if($check == 1){
// 	почему он не берет дату?!?!?
// 	нет update по where date = $date
	mysql_query("UPDATE $dep SET `ShCommit` = '$ShCommit', `check` = 1 WHERE `check` = 0 ") or DIE(mysql_error());
}
?>
<form method="post" action="test.php"> 
	Последний внесенный план от
	<select name="departament">
		<option value="komdir">КомДир
		<option value="personal">Персонал
		<option value="roznica">Розница
		<option value="doc">ДОС
		<option value="ahs">АХС
		<option value="zakupki">Закупки
		<option value="ito">ITo
	</select>
<!-- 	<input value="получить" type="submit"> -->

	<textarea name='ShCommit' cols='49' rows='4'></textarea>
	<input type="checkbox" name="check" value="1">
	<input value="Проверено" type="submit"><hr>
</form>