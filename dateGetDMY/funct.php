<?
function insertData(){
	?>
	<form method="post" action="action.php">
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
						<textarea name="date" rows="1">с-по</textarea>
						<select size="5" multiple name="month">
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
						<select size="2" multiple name="year">
							<option selected value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
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
	</form>
	<?
}
function getFromDb($tableName = '', $date = '')
{

	//получаем данные из БД и красиво пишем их на экране(с возможностью редактировать)
	//добавить сортировку ТОЛЬКО не проверенных планов(check = 0)   AND `check` = 0
	$print = mysql_query("SELECT * FROM $tableName WHERE date = '$date'");
	while($row = mysql_fetch_array($print)){
		// 	переменные в нормальном виде существует только внутри цикла while(????)
		// variable live only in WHILE. outside get the last one data of DB!!!
		$db_hight = $row['hight'];
		$db_middle = $row['middle'];
		$db_low = $row['low'];
		$db_other = $row['other'];
		$db_date = $row['date'];
		// создаем таблицу вывода(с формой ввода данных в которую идут значения из планов)
		?> 
		<div class='main'>
			<a><?//echo $db_date?></a>
			<div class='hight'>
				<div class='hightIn'>
						<textarea name='hightIn' cols='41' rows='11'><?echo $db_hight?></textarea>
				</div>
			</div>
			<div class='middle'>
				<div class='middleIn'>
					<textarea name='middleIn' cols='41' rows='11'><? echo $db_middle?></textarea>
				</div>
			</div>
			<div class='low'>
				<div class='lowIn'>
					<textarea name='lowIn' cols='41' rows='11'><? echo $db_low?></textarea>
				</div>
			</div>
			<div class='other'>
				<div class='otherIn'>
					<textarea name='otherIn' cols='41' rows='11'><?echo $db_other?></textarea>
				</div>
			</div>
		</div>
		<?
	}
	// echo "<div class='head'>".$db_date."</div>";
	// echo $db_date;
}
?>