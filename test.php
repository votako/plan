<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssGet.css">

<a href="done/sh.php">sh</a><br>
<a href="it.php">it</a><br>
<a href="index.php">localhost</a><br>
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
$get = mysql_query("select * from $ito where month = '5' and date = '5-8' and `check` = '1' order by date DESC");
	while($row = mysql_fetch_array($get)){
		$date = $row['date'];
		$month = $row['month'];
		
		$hight = $row['hight'];
// 		$doneH = $row['doneH'];
		
		$middle = $row['middle'];
// 		$doneM = $row['doneM'];
		
		$low = $row['low'];
// 		$doneL = $row['doneL'];
		
		$other = $row['other'];
// 		$doneO = $row['doneO'];
		?>
<form method="post" action="test.php">
<div class='main'>
	<a><?//echo $db_date?></a>
	<div class='hight'>
		<div class='hightIn'>
			<textarea name='hightIn' cols='41' rows='11'><?echo $hight?></textarea>
			<div class=hightInFooter>
				<textarea name='doneH' cols='20' rows='1'><?echo @$doneH?></textarea>
			</div>
		</div>
	</div>
	<div class='middle'>
		<div class='middleIn'>
			<textarea name='middleIn' cols='41' rows='11'><? echo $middle?></textarea>
			<div class=middleInFooter>
				<textarea name='doneM' cols='20' rows='1'><?echo @$doneM?></textarea>
			</div>
		</div>
	</div>
	<div class='low'>
		<div class='lowIn'>
			<textarea name='lowIn' cols='41' rows='11'><? echo $low?></textarea>
			<div class=lowInFooter>
				<textarea name='doneL' cols='20' rows='1'><?echo @$doneL?></textarea>
			</div>
		</div>
	</div>
	<div class='other'>
		<div class='otherIn'>
			<textarea name='otherIn' cols='41' rows='11'><?echo $other?></textarea>
			<div class=otherInFooter>
				<textarea name='doneO' cols='20' rows='1'><?echo @$doneO?></textarea>
			</div>
		</div>
	</div>
</div>

<?
@$go = $_POST['go'];
@$hightIn = $_POST['hightIn'];
@$doneH = $_POST['doneH'];

@$middleIn = $_POST['middleIn'];
@$doneM = $_POST['doneM'];

@$lowIn = $_POST['lowIn'];
@$doneL = $_POST['doneL'];

@$otherIn = $_POST['otherIn'];
@$doneO = $_POST['doneO'];

if($go == 1){
	mysql_query("update $ito set hight ='$hightIn', doneH = '$doneH', middle = '$middleIn', doneM = '$doneM', low = '$lowIn', doneL = '$doneL', other = '$otherIn', doneO = '$doneL' where date = '5-8' ") or die(mysql_error());
}

}
// 	комментарий от Шк
	$getTest = mysql_query("select distinct ShCommit from $ito where month = '5' and date = '5-8' and `check` = '1' ");
	while($row = mysql_fetch_array($getTest)){
		$sh = $row['ShCommit'];
		?><textarea name='ShCommit' cols='41' rows='1'><?echo $sh?></textarea><?
	}
	
?>
<input type="checkbox" name="go" value="1">
<input value="GO" type="submit"><br>
</form>