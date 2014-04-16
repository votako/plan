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
$ito = "ito";

//подключение к SQL и DB
mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($dbName) or die(mysql_error());
//для записи в БД русских символов и корректного их отображения.
mysql_query('SET NAMES utf8');
// подключено


//get funct
include 'funct.php';

// from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' order by dateChange DESC limit 4
// функция принимает 4 аргумента: отдел\месяц\дата\проверка. выводит данные на экран
// +выводит коментШК по тем же аргументам
$getDateCheck = 'getDateCheck';
$getMon = 'getMonth';

include 'form.php';
$form = 'form';

//do not worry, in 1-t print: error. fix = @(display error==0)
@$getMonth = $_POST['getMonth'];
@$getDate = $_POST['getDate'];

?>
<!-- форма ввода данных для поиска в mysql и вывода на экран -->
<div class="get">
	<form method="post" action="it.php">
	Проверенные планы за месяц:
		<?$getMon()?>
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
		<input name="hide" value="скрыть" type="submit">
	</form>
</div>
<?
//get data from form and echo on display, ONLY CHECK==2!!!
if(@$_POST['get']){
	$getDateCheck($ito, $getMonth, $getDate, '2');
}else if(@$_POST['hide']){
	mysql_query("select * from $ito where month = '13'");
}
echo "<hr>";
// <!-- форма добавления плана -->
$form($ito);

?>
</body>
</html>

