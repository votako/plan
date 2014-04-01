<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssGet.css">
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

//get funct
include 'funct/funct.php';
$getAllMonthCheck0 = 'getAllMonthCheck0';
$getAllMonthCheck1 = 'getAllMonthCheck1';
?>
<a href="it.php">it</a><br>
<a href="done/sh.php">sh</a>
<!-- get all month -->
<form method="post" action="index.php">
	<select name="monthCheck0">
		<option value="01" selected>01
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
	<input value="all on month check = 0" type="submit">
</form>
		<br>	
<form method="post" action="index.php">
	<select name="monthCheck1">
		<option value="01" selected>01
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
	<input value="all on month check = 1" type="submit">
</form>
<?
//get data from form
//do not worry, in 1-t print: error. how fix?
$monthCheck0 = isset($_POST['monthCheck0']);
$monthCheck1 = isset($_POST['monthCheck1']);
//get all the data from the month, shorted by date form low
$getAllMonthCheck0($ito, $monthCheck0); 
$getAllMonthCheck1($ito, $monthCheck1);
?>