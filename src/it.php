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
mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($dbName) or die(mysql_error());
//для записи в БД русских символов и корректного их отображения.
mysql_query('SET NAMES utf8');
// подключено

//get funct
include 'funct/funct.php';
$getDateCheck = 'getDateCheck';
?>

<a href="done/sh.php">sh</a><br>
<a href="index.php">localhost</a><br>

<form method="post" action="it.php">
	<select name="getMonth">
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
	
<?@$getMonth = $_POST['getMonth'];?>

	<select name="getDate"><?
		$print = mysql_query("SELECT DISTINCT date FROM $ito where month = '$getMonth' ORDER BY date DESC LIMIT 6");
		while($row = mysql_fetch_array($print)){
			$date = $row['date'];
			?><option value="<?echo $date?>" selected><?echo $date;
		}
		?>
	</select>
	
	<select name="getCheck">
		<option value="0" selected>0
		<option value="1">1
	</select>
	<input value="получить" type="submit">
</form>

<?
//get data from form
//do not worry, in 1-t print: error. fix = @(display error==0)
@$getDate = $_POST['getDate'];
@$getCheck = $_POST['getCheck'];
//get all the data from the month and date, shorted by date form low
$getDateCheck($ito, $getMonth, $getDate, $getCheck);

?>
<form method="post" action="actionIt.php">
<html>
	<head>
<!-- 	подключение css и установка кодировки. в базе данных русские символы отображаются плохо -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css.css">
		<title>Планы</title>
	</head>
	<body>
<!-- 	 открытие спойтера1 -->
	<div class="spoil">
	<!-- 	 открытие спойтера2 -->
		<div class="smallfont">
<!-- 		 ебанутый и непонятно как работающий инпут для раскрытия спойлера-->
		<input type="button" value="Составить план" class="input-button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Свернуть'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Составить план'; }"/>
		</div>
	<!-- 	 закрытие спойтера2^-->
	<!--  	открытие спойтера3-->
		<div class="alt2">
	<!-- 	 открытие спойтера4-->
		<div style="display: none;">

			<div class=main>
					<div class=head>
						Внутренний журнал обработки поступающих указаний 
						<textarea name="date" cols="11" rows="1">с-по</textarea>
						<select name="month">
							<option value="1">1
							<option value="2">2
							<option value="3">3
							<option value="4">4
							<option value="5" selected>5
							<option value="6">6
							<option value="7">7
							<option value="8">8
							<option value="9">9
							<option value="10">10
							<option value="11">11
							<option value="12">12
						</select>
						
						<select name="year">
							<option value="2014">2014
							<option value="2015">2015
						</select>
						
						<input name="pwd" value="pwd">
						<input value="Добавить запись" type="submit">
					</div>			
		<!-- 		ввод данных разбит на важности. от высокой к низкой	 -->
					<div class=hight>	
						<div class=hightIn>
							<textarea name="hightIn1" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=hightIn>
							<textarea name="hightIn2" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=hightIn>
							<textarea name="hightIn3" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=hightIn>
							<textarea name="hightIn4" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
					</div>
					
					<div class=middle>
						<div class=middleIn>
							<textarea name="middleIn1" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=middleIn>
							<textarea name="middleIn2" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=middleIn>
							<textarea name="middleIn3" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=middleIn>
							<textarea name="middleIn4" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
					</div>
					
					<div class=low>
						<div class=lowIn>
							<textarea name="lowIn1" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=lowIn>
							<textarea name="lowIn2" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=lowIn>
							<textarea name="lowIn3" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=lowIn>
							<textarea name="lowIn4" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
					</div>
					
					<div class=other>
						<div class=otherIn>
							<textarea name="otherIn1" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=otherIn>
							<textarea name="otherIn2" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=otherIn>
							<textarea name="otherIn3" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
						
						<div class=otherIn>
							<textarea name="otherIn4" cols="41" rows="10"></textarea>
						</div>
		<!-- 				<div class=hightInFooter>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
					</div>
					
				</div>
		
		</div>
	<!-- 	 закрытие спойтера4-->
		</div>
<!-- 	 закрытие спойтера3-->
	</div>
<!-- 	 закрытие спойтера1(spoil)-->
	
</body>
</html>
</form>

