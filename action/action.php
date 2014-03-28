<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
	$month = $_POST[''];
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
	mysql_query("INSERT INTO $tableName(hight, middle, low, other, date) VALUES ('$hightIn1', '$middleIn1', '$lowIn1', '$otherIn1', '$date')") or die(mysql_error());
	mysql_query("INSERT INTO $tableName(hight, middle, low, other, date) VALUES ('$hightIn2', '$middleIn2', '$lowIn2', '$otherIn2', '$date')") or die(mysql_error());
	mysql_query("INSERT INTO $tableName(hight, middle, low, other, date) VALUES ('$hightIn3', '$middleIn3', '$lowIn3', '$otherIn3', '$date')") or die(mysql_error());
	mysql_query("INSERT INTO $tableName(hight, middle, low, other, date) VALUES ('$hightIn4', '$middleIn4', '$lowIn4', '$otherIn4', '$date')") or die(mysql_error());

	// вывод на экран добавлений согласно сегодняшней дате
	$print = mysql_query("SELECT * FROM $tableName WHERE date='$date'");
	while($row = mysql_fetch_array($print)){
	// 	переменные в нормальном виде существует только внутри цикла while(????)
		$db_hight = $row['hight'];
		$db_middle = $row['middle'];
		$db_low = $row['low'];
		$db_other = $row['other'];
		$db_date = $row['date'];
		echo $db_hight." | ".$db_middle." | ".$db_low." | ".$db_other." | ".$db_date."</br><hr>";
	}
}else{echo "пароль(pwd) не верный!";}
?>