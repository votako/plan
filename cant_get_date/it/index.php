<!-- фформа ввода данных в базу sql -->
<form method="post" action="action.php">
<?
// подключаем файл с функциями
include 'funct.php';
$getData = 'getFromDb';

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

?>

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
						Внутренний журнал обработки поступающих указаний <textarea name="date" cols="41" rows="1"></textarea>
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
	
	
	<div class="spoil"><!-- 	 открытие спойтера1 -->
<!-- 	 открытие спойтера2 -->
	<div class="smallfont"><input type="button" value="Все планы" class="input-button" onclick="if 
		(this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') 
		{ this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; 
		this.innerText = ''; this.value = 'Свернуть'; } else 
		{ this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; 
		this.value = 'Все планы'; }"/>
	</div><!-- 	 закрытие спойтера2^-->
	<div class="alt2"><!--  	открытие спойтера3-->
		<div style="display: none;"><!-- 	 открытие спойтера4-->

			<?
			// получаем даты из БД(без дублей(DISTINCT), только НЕ проверенное, отсортированное по дате от последней)
			$print = mysql_query("SELECT DISTINCT date, month, year FROM $ito ORDER BY date DESC");
				while($row = mysql_fetch_array($print)){
					$db_date = $row['date'];
					$db_month = $row['month'];
					$db_year = $row['yaer'];
					?>
					<div class="spoil">
						<!-- 	 открытие спойтера2 -->
						<div class="smallfont"><input type="button" value="<?echo $db_date.".".$db_month;?>" class="input-button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Свернуть'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = '<?echo $db_date.".".$db_month;?>'; }"/>
						</div><!-- 	 закрытие спойтера2^-->
						
						<div class="alt2"><!--  	открытие спойтера3-->
							<div style="display: none;"><!-- 	 открытие спойтера4-->
								<?$getData('ito');?>
							</div><!-- 	 закрытие спойтера4-->
						</div><!-- 	 закрытие спойтера3-->
					</div><!-- 	 закрытие спойтера1(spoil)-->
				<?}?>
		</div><!-- 	 закрытие спойтера4-->
	</div><!-- 	 закрытие спойтера3-->
</div><!-- 	 закрытие спойтера1(spoil)-->
	</body>
</html>
</form>