<!-- форма проверки планов кривая!!! -->

<html>
<head>
<!-- 	подключение css и установка кодировки. в базе данных  -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssGet.css">
<title>Планы</title>
</head>
<body>
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

//get funct
include 'funct/funct.php';
$getDateCheck = 'getDateCheck';
$getDateMonth = 'getDateMonth';

@$getMonth = $_POST['getMonth'];
@$getDate = $_POST['getDate'];
@$getCheck = $_POST['getCheck'];
@$getDepart = $_POST['getDepart'];


//remember selected departament
session_start();
$depart = array('komdir', 'personal', 'roznica', 'doc', 'ahs', 'zakupki', 'ito');
if (isset($_POST['getDepart'])) {
	$key = array_search($_POST['getDepart'], $depart);
	if ($key!==false) {
		$_SESSION['getDepart'] = $depart[$key];
	}
}
?>
<div class="get">
	<form method="post" action="sh.php">
	Отдел:
<!-- 	//remember selected departament -->
		<select name="getDepart">
			<?foreach ($depart as $value):?>
			<option value="<? echo $value; ?>" <? if ($_SESSION['getDepart'] == $value) {echo "selected";}?>> <? echo $value; ?> </option>  
			<?endforeach; ?> 
		</select>
	Планы за месяц:
		<select name="getMonth">
			<option value="01">01
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
		</select>
	дата:
		<select name="getDate"><?
			$print = mysql_query("SELECT DISTINCT date FROM $getDepart where month = '$getMonth' ORDER BY dateChange limit 5");
			while($row = mysql_fetch_array($print)){
				$date = $row['date'];
				?><option value="<?echo $date?>" selected><?echo $date;
			}
			?>
		</select>
	проверен?
		<select name="getCheck">
			<option value="0">нет
			<option value="1" selected>да
		</select>
		<input value="получить" type="submit">
	</form>
	<form method="post" action="sh.php">
		<input value="скрыть" type="submit">
		<?mysql_query("select * from $getDepart where month = '13'");?>
	</form>
<form method="post" action="sh.php"> 
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
	<input value="получить" type="submit">
</form>
</div>
<?
	
//выводит планы согласно значениям введенным в форме Отдел, Планы за месяц, дата, проверен?^
$getDateCheck($getDepart, $getMonth, $getDate, $getCheck);

// причина по которой это не выведено в отдельную функцию - не обрабатывает "проверено+комментарий"
// последний внесенный план от отдела:
@$dep = $_POST['departament'];
//get all the data from the month, shorted by date form low
$get = mysql_query("select date, month, hight, middle, low, other from $dep where `check` = 0 order by dateChange DESC");
while($row = @mysql_fetch_array($get)){
	$date = $row['date'];
	$month = $row['month'];
	$hight = $row['hight'];
	$middle = $row['middle'];
	$low = $row['low'];
	$other = $row['other'];
?>
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
<?}?>
	
<?
@$check = $_POST['check'];
@$ShCommit = $_POST['ShCommit'];
if($check == 1){
// 	почему он не берет дату?!?!?
// 	нет update по where date = $date
	mysql_query("UPDATE $dep SET `ShCommit` = '$ShCommit', `check` = 1 WHERE `check` = 0 ") or DIE(mysql_error());
}
?>
<form method="post" action="sh.php">
	<textarea name='ShCommit' cols='49' rows='4'></textarea>
	<input type="checkbox" name="check" value="1">
	<input value="Проверено" type="submit"><hr>
</form>
<?
//end of remember departament
//close session when go to another page
session_unset();
?>