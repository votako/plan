<html>
<head>
<!-- 	подключение css и установка кодировки. в базе данных  -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssGet.css">
<title>Планы</title>
</head>
<body>
<a href="index.php"><img src="topol.png"></a>
<a href="it.php"><img src="it.png"></a>
<a href="sh.php"><img src="sh.png"></a>
<?
// данные для подключения к БД
$hostname = "localhost";
$username = "root";
$password = "NIAP637";
$dbName = "plan";
$ito = "ito";

//подключение к SQL и DB
mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($dbName) or die(mysql_error());
//для записи в БД русских символов и корректного их отображения.
mysql_query('SET NAMES utf8');
// подключено

//get funct
include 'funct/funct.php';
$getDateCheck = 'getDateCheck';
//do not worry, in 1-t print: error. fix = @(display error==0)
@$getMonth = $_POST['getMonth'];
@$getDate = $_POST['getDate'];
?>
<!-- форма ввода данных для поиска в mysql и вывода на экран -->
<div class="get">
	<form method="post" action="it.php">
	Проверенные планы за месяц:
		<select name="getMonth">
			<option value="01">01
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
	дата:
		<select name="getDate"><?
			$print = mysql_query("SELECT DISTINCT date FROM $ito where month = '$getMonth' ORDER BY dateChange ");
			while($row = mysql_fetch_array($print)){
				$date = $row['date'];
				?><option value="<?echo $date?>" selected><?echo $date;
			}
			?>
		</select>
		<input value="получить" type="submit">
	</form>
	<form method="post" action="it.php">
		<input value="скрыть" type="submit">
		<?mysql_query("select * from $ito where month = '13'");?>
	</form>
</div>
<?
//get data from form and echo on display, ONLY CHECK==0!!!
$getDateCheck($ito, $getMonth, $getDate, '0');
?>
<hr>
<!-- форма добавления плана -->
<form method="post" action="actionIt.php">
	<div class=main>
		<div class=head>
			<div align="center">
				<FONT face="Comic Sans MS">Внутренний журнал обработки поступающих указаний</FONT> <br>
				дата: с-по
				<textarea name="date" cols="11" rows="1"></textarea>
				месяц:
				<select name="month">
					<option value="01">01
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
						
				<select name="year">
					<option value="2014">2014
					<option value="2015">2015
				</select>
				пароль
				<input type="password" name="pwd" value="">
				<input value="Добавить запись" type="submit">
			</div>
		</div>
		<!-- 		ввод данных разбит на важности. от высокой к низкой	 -->
		<div class=hight>	
			<div class="text"><b>СверхВажно и СверхСрочно</b></div>
			<div class=hightIn>
				<textarea name="hightIn1" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
			<div class=hightIn>
				<textarea name="hightIn2" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
			<div class=hightIn>
				<textarea name="hightIn3" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
			<div class=hightIn>
				<textarea name="hightIn4" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
		</div>
					
		<div class=middle>
			<div class="text"><b>Важно и Срочно</b></div>
			<div class=middleIn>
				<textarea name="middleIn1" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
			<div class=middleIn>
				<textarea name="middleIn2" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
			<div class=middleIn>
				<textarea name="middleIn3" cols="41" rows="10"></textarea>
			</div>
	<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
			<div class=middleIn>
				<textarea name="middleIn4" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
		</div>
					
		<div class=low>
			<div class="text"><b>Срочно </b>но НеВажно</div>
			<div class=lowIn>
				<textarea name="lowIn1" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
			<div class=lowIn>
				<textarea name="lowIn2" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
			<div class=lowIn>
				<textarea name="lowIn3" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
			<div class=lowIn>
				<textarea name="lowIn4" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
		</div>
					
		<div class=other>
			<div class="text"><b>Важно </b>но НеСрочно</div>
			<div class=otherIn>
				<textarea name="otherIn1" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
			<div class=otherIn>
				<textarea name="otherIn2" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
			<div class=otherIn>
				<textarea name="otherIn3" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
					
			<div class=otherIn>
				<textarea name="otherIn4" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
		</div>
	</div>
</form>

</body>
</html>

