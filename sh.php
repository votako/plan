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
$last = 'last';

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
			$print = mysql_query("SELECT DISTINCT date FROM $getDepart where month = '$getMonth' ORDER BY dateChange ");
			while($row = mysql_fetch_array($print)){
				$date = $row['date'];
				?><option value="<?echo $date?>" selected><?echo $date;
			}
			?>
		</select>
	проверен?
		<select name="getCheck">
			<option value="0">нет
			<option value="1">да
		</select>
		<input value="получить" type="submit">
	</form>
	<form method="post" action="sh.php">
		<input value="скрыть" type="submit">
		<?mysql_query("select * from $getDepart where month = '13'");?>
	</form>
	<form name="dep" action="#" method="post">
		<input type="checkbox" name="departament" value="1">КомДир
		<input type="checkbox" name="departament" value="2">Персонал
		<input type="checkbox" name="departament" value="3">Розница
		<input type="checkbox" name="departament" value="4">ДОС
		<input type="checkbox" name="departament" value="5">АХС
		<input type="checkbox" name="departament" value="6">Закупки
		<input type="checkbox" name="departament" value="7">ИТо
		<input value="получить свежайший план на завтрак" type="submit">
	</form>
</div>
<?
//print all data
$getDateCheck($getDepart, $getMonth, $getDate, $getCheck);
switch (@$_POST['departament']) {
	case '1':
		$last('ito');
		break;

	case '2':
		echo "2";
		break;

	case '3':
		echo "3";
		break;
	
	case '4':
		echo "3";
		break;
		
	case '5':
		echo "4";
		break;

	case '6':
		echo "4";
		break;

	case '7':
		echo "4";
		break;
}
//end of remember departament
//close session when go to another page
session_unset();
?>