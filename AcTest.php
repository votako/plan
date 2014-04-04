<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssGet.css">
<a href="test.php">back</a><br>
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

@$go = $_POST['go'];

if($go == 1){
$get = mysql_query("select hight from $ito where month = '1' and date = '1-1' and `check` = '0' order by date DESC");
	while($row = mysql_fetch_array($get)){
		$hight = $row['hight'];
// 		$date = $row['date'];
// 		$month = $row['month'];
// 		$doneH = $row['doneH'];
// 		$middle = $row['middle'];
// 		$doneM = $row['doneM'];
// 		$low = $row['low'];
// 		$doneL = $row['doneL'];
// 		$other = $row['other'];
// 		echo $hight;
	}
// 		$test = mysql_query("update ito set doneH = '$doneH' where hight = '$hight'");
for($i=0; $i<5; $i++){
	@$doneH[$i] = $_POST['doneH[$i]'];
	echo $doneH[$i];
}
}else {echo "no";}
?>