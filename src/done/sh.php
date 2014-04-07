<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/cssGetSh.css">
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

//get funct
include '../funct/funct.php';

$getAllMonthCheck0 = 'getAllMonthCheck0';
// $getAllMonthCheck1 = 'getAllMonthCheck1';
?>
<!-- ссылка на выше -->
<a href="../it.php">it</a><br>
<a href="../index.php">localhost</a><br>

<form method="post" action="sh.php"> 
	НЕ проверенные планы за
	<select name="monthCheck0">
		<option value="01" selected>01
		<option value="02">02
		<option value="03">03
		<option value="04">04
		<option value="05">05
		<option value="06">06
		<option value="07">07
		<option value="08">08
		<option value="09">09
		<option value="10">10
		<option value="11">11
		<option value="12">12
	</select>месяц
	<input value="получить" type="submit">
</form>
<?
//get data from form
//do not worry, in 1-t print: error. how fix?
@$monthCheck0 = $_POST['monthCheck0'];
//get all the data from the month, shorted by date form low
$get = mysql_query("select * from $ito where month = '$monthCheck0' and `check` = 0 order by date DESC");
while($row = mysql_fetch_array($get)){
	$date = $row['date'];
	$month = $row['month'];
	$hight = $row['hight'];
	$middle = $row['middle'];
	$low = $row['low'];
	$other = $row['other'];
?>
	<div class='main'>
		<a><?//echo $date?></a>
		<div class='hight'>
			<div class='hightIn'>
				<textarea name='hightIn' cols='41' rows='11'><?echo $hight?></textarea>
			</div>
		</div>
		<div class='middle'>
			<div class='middleIn'>
				<textarea name='middleIn' cols='41' rows='11'><? echo $middle?></textarea>
			</div>
		</div>
		<div class='low'>
			<div class='lowIn'>
				<textarea name='lowIn' cols='41' rows='11'><? echo $low?></textarea>
			</div>
		</div>
		<div class='other'>
			<div class='otherIn'>
				<textarea name='otherIn' cols='41' rows='11'><?echo $other?></textarea>
			</div>
		</div>
	</div>
<?}?>
	
<?
@$check = $_POST['check'];
@$ShCommit = $_POST['ShCommit'];
if($check == 1){
// 	почему он не берет дату?!?!?
// 	нет update по where date = $date
	mysql_query("UPDATE $ito SET ShCommit = '$ShCommit', `check` = 1 WHERE `check` = 0 ") or DIE(mysql_error());
}
?>
<form method="post" action="sh.php">
	<textarea name='ShCommit' cols='41' rows='1'></textarea>
	<input type="checkbox" name="check" value="1">
	<input value="Проверено" type="submit"><hr>
</form>