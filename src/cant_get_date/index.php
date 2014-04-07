<?php
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

$Password = $_REQUEST['password'];
if ($Password == '1'){
    header("Location: it/"); 
 
}elseif($Password == '2'){
	header("Location: sh/"); 
}else { ?>
    <html>
        <body>
            <form name="form" action="index.php">
                pwd: <input name="password" value="">
                <input type="submit" name="button" value="OK" />
                <br>
                truncate table: <input type="checkbox" name="truncate" value="1">
                <input type="submit" name="buttonT" value="OK" />
            </form>
        </body>
    </html>

 
<?php } 
if($_REQUEST['truncate'] == '1'){
	mysql_query("TRUNCATE TABLE `ito`"); 
}?>
