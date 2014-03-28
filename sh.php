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
<!--get month--!>
	проверенные планы за
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
        </select>месяц
        <input value="получить" type="submit">

</form>
<?
//get data from form
//do not worry, in 1-t print: error. how fix?
$monthCheck1 = $_POST['monthCheck1'];
//get all the data from the month, shorted by date form low
$getAllMonthCheck1($ito, $monthCheck1);

?>
