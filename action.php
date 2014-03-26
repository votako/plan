<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

$hostname = "localhost";
$username = "root";
$password = "NIAP637";
$dbName = "plan";
$ito = "ito";

mysql_connect($hostname, $username, $password) or die("<br/>no connect to sql<br/>");
mysql_select_db($dbName) or die("no connect to DB");
mysql_query('SET NAMES utf8');

$check = $_POST['check'];
if($check == 1){
	mysql_query("UPDATE $ito SET `check` = 1") or DIE(mysql_error());
}

?>