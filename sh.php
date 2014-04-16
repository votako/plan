<html>
<head>
<!-- 	подключение css и установка кодировки. в базе данных  -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>Планы</title>
</head>
<body>
<div align="center">
	<a href="index.php"><img src="img/topol.png"></a>
	<a href="it.php"><img src="img/it.png"></a>
	<a href="sh.php"><img src="img/sh.png"></a>
	<a href="test.php"><img src="img/test.png"></a>
	<a href="funct.php"><img src="img/function_90x90.png"></a>
	<a href="form.php"><img src="img/form.png"></a>
</div>
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
include 'funct.php';

// 
$getMon = 'getMonth';

// from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' order by dateChange DESC limit 4
// функция принимает 4 аргумента: отдел\месяц\дата\проверка. выводит данные на экран
// +выводит коментШК по тем же аргументам
$getDateCheck = 'getDateCheck';

// from $tableName where `check` = 0 order by dateChange DESC limit 4
// функция принимает только 1 аргумент: отдел. выводит данные на экран
// не выводит комент от ШК(он есть в форме dep)
$last = 'last';

// form name = getAllOnDepartament
// переменные для формы getAllOnDepartament
// (выбор отдела, месяца, даты(выводится только после введения месяца) и проверки(да\нет(добавить проверено\нет\выполнено?)))
@$getMonth = $_POST['getMonth'];
@$getDate = $_POST['getDate'];
@$getCheck = $_POST['getCheck'];
@$getDepart = $_POST['getDepart'];

// form name = dep 
// переменные для формы dep(получение последнего добавленного(check = 1) плана)
@$dep = $_POST['departament'];
@$ShCommit = $_POST['ShCommit'];

//remember selected departament
// session_start(); in funct.php in getMonth()
$depart = array('komdir', 'personal', 'roznica', 'doc', 'ahs', 'zakupki', 'ito');
if (isset($_POST['getDepart'])) {
	$key = array_search($_POST['getDepart'], $depart);
	if ($key!==false) {
		$_SESSION['getDepart'] = $depart[$key];
	}
}
?>
<div class="get">
	<form name="getAllOnDepartament" method="post" action="sh.php">
	Отдел:
		<select name="getDepart">
			<?foreach ($depart as $value):?>
			<option value="<? echo $value; ?>" <? if ($_SESSION['getDepart'] == $value) {echo "selected";}?>> <? echo $value; ?> </option>  
			<?endforeach; ?> 
		</select>
	Планы за месяц:
		<?$getMon();?>
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
		<input name="get" value="получить" type="submit">
		<input name="clear" value="скрыть результаты" type="submit">
	</form>
	<br><hr>
	<form name="dep" action="#" method="post">
		<select name="departament">
			<option value="komdir">КомДир
			<option value="personal">Персонал
			<option value="roznica">Розница
			<option value="doc">ДОС
			<option value="ahs">АХС
			<option value="zakupki">Закупки
			<option value="ito" selected>ITo
		</select>
		<input name="depGet" value="получить свежайший план на завтрак" type="submit">
		<br>
		<textarea name='ShCommit' cols='49' rows='4'></textarea>
		<input name="setCheck" value="проверено" type="submit">
	</form>
</div>
<?
	
//выводит все планы согласно значениям введенным в форме dep+сброс поиска
if(@$_POST['get']){
	$getDateCheck($getDepart, $getMonth, $getDate, $getCheck);
}else if(@$_POST['clear']){
	mysql_query("select * from $getDepart where month = '13'");
}

// получаем дату и месяц из запроса(нужно для вывода последних данных)
@$dep = $_POST['departament'];
$test = mysql_query("select date, month from $dep where `check` = 1");
while($raw = @mysql_fetch_array($test)){
	$dbDate = $raw['date'];
	$dbMonth = $raw['month'];
}
// form name = dep обработчик событий для формы dep
if(@$_POST['depGet']){
	switch (@$_POST['departament']) {
		case 'komdir':
			$getDateCheck('komdir', $dbMonth, $dbDate, '1');
// 			$last('komdir');
		break;

		case 'personal':
			$getDateCheck('personal', $dbMonth, $dbDate, '1');
// 			$last('personal');
		break;

		case 'roznica':
			$getDateCheck('roznica', $dbMonth, $dbDate, '1');
// 			$last('roznica');
		break;
	
		case 'doc':
			$getDateCheck('doc', $dbMonth, $dbDate, '1');
// 			$last('doc');
		break;
		
		case 'ahs':
			$getDateCheck('ahs', $dbMonth, $dbDate, '1');
// 			$last('ahs');
		break;

		case 'zakupki':
			$getDateCheck('zakupki', $dbMonth, $dbDate, '1');
// 			$last('zakupki');
		break;
	
		case 'ito':
			$getDateCheck('ito', $dbMonth, $dbDate, '1');
// 			$last('ito');
		break;
	}
}else if(@$_POST['setCheck']){
	mysql_query("UPDATE $dep SET `ShCommit` = '$ShCommit', `check` = 2 WHERE `check` = 1 ") or DIE(mysql_error());
}
//end of remember departament
//close session when go to another page
// session_unset();
?>