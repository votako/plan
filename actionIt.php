<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssGet.css">

<?
// данные для подключения к БД
$hostname = "localhost";
$username = "root";
$password = "NIAP637";
$dbName = "plan";
$tableName = "ito";

//подключение к SQL и DB
$connect = mysql_connect($hostname, $username, $password) or die("<br/>no connect to sql<br/>");
mysql_select_db($dbName) or die("no connect to DB");
mysql_query('SET NAMES utf8');
// подключено

$pwd = $_POST['pwd'];
if($pwd == 1){
	// дата(сегодня)
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	// значения из формы ввода планов.
	$hightIn1 = $_POST['hightIn1'];
	$hightIn2 = $_POST['hightIn2'];
	$hightIn3 = $_POST['hightIn3'];
	$hightIn4 = $_POST['hightIn4'];

	$middleIn1 = $_POST['middleIn1'];
	$middleIn2 = $_POST['middleIn2'];
	$middleIn3 = $_POST['middleIn3'];
	$middleIn4 = $_POST['middleIn4'];

	$lowIn1 = $_POST['lowIn1'];
	$lowIn2 = $_POST['lowIn2'];
	$lowIn3 = $_POST['lowIn3'];
	$lowIn4 = $_POST['lowIn4'];

	$otherIn1 = $_POST['otherIn1'];
	$otherIn2 = $_POST['otherIn2'];
	$otherIn3 = $_POST['otherIn3'];
	$otherIn4 = $_POST['otherIn4'];

	// добавления в БД значений из формы ввода данных с датой.
	mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, date, month, year) VALUES ('1', '$hightIn1', '$middleIn1', '$lowIn1', '$otherIn1', '$date', '$month', '$year')") or die(mysql_error());
	mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, date, month, year) VALUES ('2', '$hightIn2', '$middleIn2', '$lowIn2', '$otherIn2', '$date', '$month', '$year')") or die(mysql_error());
	mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, date, month, year) VALUES ('3', '$hightIn3', '$middleIn3', '$lowIn3', '$otherIn3', '$date', '$month', '$year')") or die(mysql_error());
	mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, date, month, year) VALUES ('4', '$hightIn4', '$middleIn4', '$lowIn4', '$otherIn4', '$date', '$month', '$year')") or die(mysql_error());
	
	echo "<a href='it.php'><img src="?>carousel_back_button.gif<?">назад</a><br>";
	// вывод на экран добавлений согласно сегодняшней дате
	$print = mysql_query("SELECT hight, middle, low, other, date FROM $tableName WHERE date='$date'");
	while($row = mysql_fetch_array($print)){
	// 	переменные в нормальном виде существует только внутри цикла while(????)
		$hight = $row['hight'];
		$middle = $row['middle'];
		$low = $row['low'];
		$other = $row['other'];
		$date = $row['date'];
		?>
		<body>
		<div class="get">
		<div class='main'>
			<a><?//echo $db_date?></a>
			<div class='hight'>
				<div class='hightIn'>
					<textarea name='hightIn' cols='41' rows='11'><?echo $hight?></textarea>
				</div>
<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
			</div>
			<div class='middle'>
				<div class='middleIn'>
					<textarea name='middleIn' cols='41' rows='11'><? echo $middle?></textarea>
				</div>
<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
			</div>
			<div class='low'>
				<div class='lowIn'>
					<textarea name='lowIn' cols='41' rows='11'><? echo $low?></textarea>
				</div>
<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
			</div>
			<div class='other'>
				<div class='otherIn'>
					<textarea name='otherIn' cols='41' rows='11'><?echo $other?></textarea>
				</div>
<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
			</div>
		</div>
		</div>
		</body>
		<?
	}
}else{echo "пароль не верный!";}
?>
