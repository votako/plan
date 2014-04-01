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
$getAllMonthCheck1 = 'getAllMonthCheck1';
?>
<a href="done/sh.php">sh</a><br>
<a href="index.php">localhost</a><br>
<form method="post" action="it.php">
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
						<textarea name="month" cols="11" rows="1">месяц</textarea>
						<textarea name="year" cols="11" rows="1">год</textarea>
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

