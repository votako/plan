<!-- 	подключение css и установка кодировки. в базе данных  -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<div align="center">
	<a href="index.php"><img src="img/topol.png"></a>
	<a href="it.php"><img src="img/it.png"></a>
	<a href="sh.php"><img src="img/sh.png"></a>
	<a href="test.php"><img src="img/test.png"></a>
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
$getId1 = mysql_query("select hight, middle, low, other from ito where date = '1-1' and `check` = 0 and id = 1") or die(mysql_error());
while($row = @mysql_fetch_array($getId1)){
	$hight1 = $row['hight'];
}
@$out = $_POST['test'];
if(@$_POST['ok']){
	mysql_query("update ito set hight = '$out' where date = '1-1' and `check` = 0 and id =1");
}
?>
<form action="#" method="post">
	<textarea name='test' cols='49' rows='4'><?echo @$hight?></textarea>
	<input name="ok" value="изменить" type="submit">
</form>