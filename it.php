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
</div>
<?
// данные для подключения к БД
$hostname = "localhost";
$username = "root";
$password = "NIAP637";
$dbName = "plan";
$ito = "ito";

//подключение к SQL и DB
mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($dbName) or die(mysql_error());
//для записи в БД русских символов и корректного их отображения.
mysql_query('SET NAMES utf8');
// подключено


//get funct
include 'funct.php';
// include 'test.php';
// from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' order by dateChange DESC limit 4
// функция принимает 4 аргумента: отдел\месяц\дата\проверка. выводит данные на экран
// +выводит коментШК по тем же аргументам
$getDateCheck = 'getDateCheck';
$form = 'form';

// $test = 'test';
//do not worry, in 1-t print: error. fix = @(display error==0)
@$getMonth = $_POST['getMonth'];
@$getDate = $_POST['getDate'];

?>
<!-- форма ввода данных для поиска в mysql и вывода на экран -->
<div class="get">
	<form method="post" action="it.php">
	Проверенные планы за месяц:
		<select name="getMonth">
			<option value="00">заготовка
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
			$print = mysql_query("SELECT DISTINCT date FROM $ito where month = '$getMonth' ORDER BY dateChange ");
			while($row = mysql_fetch_array($print)){
				$date = $row['date'];
				?><option value="<?echo $date?>" selected><?echo $date;
			}
			?>
		</select>
		<input name="get" value="получить" type="submit">
		<input name="clear" value="скрыть" type="submit">
<!-- 	</form> -->
<!-- 	<form method="post" action="#"> -->
		<input name="create" value="create" type="submit">
	</form>
</div>
<?
//get data from form and echo on display, ONLY CHECK==0!!!
if(@$_POST['get']){
	$getDateCheck($ito, $getMonth, $getDate, '0');
}else if(@$_POST['clear']){
	mysql_query("select * from $ito where month = '13'");
}
echo "<hr>";
$form($ito);
// <!-- форма добавления плана -->
?>
</body>
</html>

