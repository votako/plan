<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<div align="center">
	<a href="index.php"><img src="img/topol.png"></a>
	<a href="it.php"><img src="img/it.png"></a>
	<a href="sh.php"><img src="img/sh.png"></a>
	<a href="test.php"><img src="img/test.png"></a>
	<a href="funct.php"><img src="img/function_90x90.png"></a>
</div>
<?
// данные для подключения к БД
include 'sql.php';
$tableName = "ito";

//подключение к SQL и DB
$connect = mysql_connect($hostname, $username, $password) or die("<br/>no connect to sql<br/>");
mysql_select_db($dbName) or die("no connect to DB");
mysql_query('SET NAMES utf8');
// подключено

// проверяем переменную пароль, из формы(какой?)
$pwd = $_POST['pwd'];
if($pwd == 1){
	// дата(сегодня)
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	// значения из формы ввода планов циклом записывает в базу
	for(i=1; i<5; i++){
		$hightIn.$i = $_POST['hightIn'.$i];
		$middleIn.$i = $_POST['middleIn1'.$i];
		$lowIn.$i = $_POST['lowIn1'.$i];
		$otherIn.$i = $_POST['otherIn1'.$i];
		// добавления в БД значений из формы ввода данных с датой.
	mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, date, month, year) VALUES ('$i', '$hightIn.$i', '$middleIn.$i', '$lowIn.$i', '$otherIn.$i', '$date', '$month', '$year')") or die(mysql_error());
	}
	echo "<a href='it.php'><img src="?>img/carousel_back_button.gif<?">назад</a><br>";
	// вывод на экран добавлений согласно сегодняшней дате
	$print = mysql_query("SELECT hight, middle, low, other, date FROM $tableName WHERE date='$date'");
	while($row = mysql_fetch_array($print)){
	// 	переменные в нормальном виде существует только внутри цикла while(????)yes
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
		</div>
		</body>
		<?
	}
}else{echo "пароль не верный!";}
?>
