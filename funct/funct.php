<?
include '../test.php';
// старая копия этого файла в /home/votako/doc/plan/helpful/function_old.php
// выводит данные while без возможности редактирования ^

// причина "дублирования" функции = не принимает пустые параметры
// +++++++++++++++++++++++++++++++++++++++++
// вывод на экран БЕЗ возможности редактировать
// получение данных по: имяТаблицы	месяц		дата		проверка
function getDateCheck($tableName = '', $month = '', $getDate = '', $check = ''){
	$getId1 = mysql_query("select hight, doneH, middle, doneM, low, doneL, other, doneO, date, month from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' and id = 1 order by dateChange DESC limit 4");
	while($row = @mysql_fetch_array($getId1)){
// 		$date = $row['date'];
// 		$month = $row['month'];
		$hight1 = $row['hight'];
		$doneH1 = $row['doneH'];
		
		$middle1 = $row['middle'];
		$doneM1 = $row['doneM'];
		
		$low1 = $row['low'];
		$doneL1 = $row['doneL'];
		
		$other1 = $row['other'];
		$doneO1 = $row['doneO'];
	}
	$getId2 = mysql_query("select hight, doneH, middle, doneM, low, doneL, other, doneO, date, month from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' and id = 2 order by dateChange DESC limit 4");
	while($row = @mysql_fetch_array($getId2)){
// 		$date = $row['date'];
// 		$month = $row['month'];
		
		$hight2 = $row['hight'];
		$doneH2 = $row['doneH'];
		
		$middle2 = $row['middle'];
		$doneM2 = $row['doneM'];
		
		$low2 = $row['low'];
		$doneL2 = $row['doneL'];
		
		$other2 = $row['other'];
		$doneO2 = $row['doneO'];
	}
	$getId3 = mysql_query("select hight, doneH, middle, doneM, low, doneL, other, doneO, date, month from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' and id = 3 order by dateChange DESC limit 4");
	while($row = @mysql_fetch_array($getId3)){
// 		$date = $row['date'];
// 		$month = $row['month'];
		
		$hight3 = $row['hight'];
		$doneH3 = $row['doneH'];
		
		$middle3 = $row['middle'];
		$doneM3 = $row['doneM'];
		
		$low3 = $row['low'];
		$doneL3 = $row['doneL'];
		
		$other3 = $row['other'];
		$doneO3 = $row['doneO'];
	}
	$getId4 = mysql_query("select hight, doneH, middle, doneM, low, doneL, other, doneO, date, month from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' and id = 4 order by dateChange DESC limit 4");
	while($row = @mysql_fetch_array($getId4)){
		$date = $row['date'];
		$month = $row['month'];
		
		$hight4 = $row['hight'];
		$doneH4 = $row['doneH'];
		
		$middle4 = $row['middle'];
		$doneM4 = $row['doneM'];
		
		$low4 = $row['low'];
		$doneL4 = $row['doneL'];
		
		$other4 = $row['other'];
		$doneO4 = $row['doneO'];
	}
?>
<!-- форма вывода данных -->
<div class="text" align="center"><b><?echo @$date.".".@$month?></b></div>
<div class=colum>
	<div class="text"><b>СверхВажно и СверхСрочно</b></div>
	<div class=columIn>
		<textarea name="hightIn1" cols="41" rows="10"><?echo @$hight1;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="hightIn2" cols="41" rows="10"><?echo @$hight2;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="hightIn3" cols="41" rows="10"><?echo @$hight3;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="hightIn4" cols="41" rows="10"><?echo @$hight4;?></textarea>
						<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
	</div>
</div>
					
<div class=colum>
	<div class="text"><b>Важно и Срочно</b></div>
	<div class=columIn>
		<textarea name="middleIn1" cols="41" rows="10"><?echo @$middle1;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="middleIn2" cols="41" rows="10"><?echo @$middle2;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="middleIn3" cols="41" rows="10"><?echo @$middle3;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="middleIn4" cols="41" rows="10"><?echo @$middle4;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
	</div>
</div>
					
<div class=colum>
	<div class="text"><b>Срочно </b>но НеВажно</div>
	<div class=columIn>
		<textarea name="lowIn1" cols="41" rows="10"><?echo @$low1;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="lowIn2" cols="41" rows="10"><?echo @$low2;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="lowIn3" cols="41" rows="10"><?echo @$low3;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="lowIn4" cols="41" rows="10"><?echo @$low4;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
	</div>
</div>
					
<div class=colum>
	<div class="text"><b>Важно </b>но НеСрочно</div>
	<div class=columIn>
		<textarea name="otherIn1" cols="41" rows="10"><?echo @$other1;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="otherIn2" cols="41" rows="10"><?echo @$other2;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="otherIn3" cols="41" rows="10"><?echo @$other3;?></textarea>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
		<textarea name="otherIn4" cols="41" rows="10"><?echo @$other4;?></textarea>
	</div>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
</div>
<?
// 	комментарий от Шк
	$getShCommit = mysql_query("select distinct ShCommit from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' ");
	while($row = @mysql_fetch_array($getShCommit)){
		$sh = $row['ShCommit'];
		?><textarea name='ShCommit' cols='49' rows='4'><?echo $sh?></textarea><?
	}
}

// get last add plan
// критерий поиска в таблице = последнее изменение и проверка 0
function last($tableName){
	$get = mysql_query("select hight, doneH, middle, doneM, low, doneL, other, doneO, date, month from $tableName where `check` = 0 order by dateChange DESC limit 4");
	while($row = @mysql_fetch_array($get)){
		$date = $row['date'];
		$month = $row['month'];
		
		$hight = $row['hight'];
		$doneH = $row['doneH'];
		
		$middle = $row['middle'];
		$doneM = $row['doneM'];
		
		$low = $row['low'];
		$doneL = $row['doneL'];
		
		$other = $row['other'];
		$doneO = $row['doneO'];
		?>
			<div class='colum'>
				<div class='columIn'>
					<textarea name='hightIn' cols='41' rows='11'><?echo $hight?></textarea>
				</div>
			</div>
			<div class='colum'>
				<div class='columIn'>
					<textarea name='middleIn' cols='41' rows='11'><? echo $middle?></textarea>
				</div>
			</div>
			<div class='colum'>
				<div class='columIn'>
					<textarea name='lowIn' cols='41' rows='11'><? echo $low?></textarea>
				</div>
			</div>
			<div class='colum'>name="create"
				<div class='columIn'>
					<textarea name='otherIn' cols='41' rows='11'><?echo $other?></textarea>
				</div>name="create"
			</div>
		<?
	}
	echo "<b>".@$date.".".@$month."</b>";
}
// форма вводна планов и обработчик событий. заточен только под таблицу ИТо
function form($tableName = ''){
?>
	<form method="post" action="#">
	<div class=main>
		<div class=head>
			<div align="center">
				<FONT face="Comic Sans MS">Внутренний журнал обработки поступающих указаний</FONT> <br>
				дата: с-по
				<textarea name="date" cols="11" rows="1">0-0</textarea>
				месяц:
				<select name="month">
					<option value="00">заготовка
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
				<input value="Добавить запись" name="add" type="submit">
			</div>
		</div>
		<!-- 		ввод данных разбит на важности. от высокой к низкой	 -->
		<div class=colum>
			<div class="text"><b>СверхВажно и СверхСрочно</b></div>
			<div class=columIn>
				<textarea name="hightIn1" cols="41" rows="10"><?echo @$hight1?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="hightIn2" cols="41" rows="10"></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="hightIn3" cols="41" rows="10"></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="hightIn4" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
		</div>
					
		<div class=colum>
			<div class="text"><b>Важно и Срочно</b></div>
			<div class=columIn>
				<textarea name="middleIn1" cols="41" rows="10"></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="middleIn2" cols="41" rows="10"></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="middleIn3" cols="41" rows="10"></textarea>
	<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="middleIn4" cols="41" rows="10"></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
			</div>
		</div>
					
		<div class=colum>
			<div class="text"><b>Срочно </b>но НеВажно</div>
			<div class=columIn>
				<textarea name="lowIn1" cols="41" rows="10"></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="lowIn2" cols="41" rows="10"></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="lowIn3" cols="41" rows="10"></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="lowIn4" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
		</div>
					
		<div class=colum>
			<div class="text"><b>Важно </b>но НеСрочно</div>
			<div class=columIn>
				<textarea name="otherIn1" cols="41" rows="10"></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="otherIn2" cols="41" rows="10"></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="otherIn3" cols="41" rows="10"></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="otherIn4" cols="41" rows="10"></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
		</div>
	</div>
</form>
<?
@$pwd = $_POST['pwd'];
if(@$_POST['add']){
	// дата(сегодня)
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	// значения из формы ввода планов.
	$hightIn1 = $_POST['hightIn1'];
	$hightIn2 = $_POST['hightIn2'];
	$hightIn3 = $_POST['hightIn3'];
	$hightIn4 = $_POST['hightIn4'];

	$middleIn1 = $_POST['middleIn1'];
	$middleIn2 = $_POST['middleIn2'];
	$middleIn3 = $_POST['middleIn3'];
	$middleIn4 = $_POST['middleIn4'];

	$lowIn1 = $_POST['lowIn1'];
	$lowIn2 = $_POST['lowIn2'];
	$lowIn3 = $_POST['lowIn3'];
	$lowIn4 = $_POST['lowIn4'];

	$otherIn1 = $_POST['otherIn1'];
	$otherIn2 = $_POST['otherIn2'];
	$otherIn3 = $_POST['otherIn3'];
	$otherIn4 = $_POST['otherIn4'];

	// добавления в БД значений из формы ввода данных с датой.
	mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, date, month, year) VALUES ('1', '$hightIn1', '$middleIn1', '$lowIn1', '$otherIn1', '$date', '$month', '$year')") or die(mysql_error());
	mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, date, month, year) VALUES ('2', '$hightIn2', '$middleIn2', '$lowIn2', '$otherIn2', '$date', '$month', '$year')") or die(mysql_error());
	mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, date, month, year) VALUES ('3', '$hightIn3', '$middleIn3', '$lowIn3', '$otherIn3', '$date', '$month', '$year')") or die(mysql_error());
	mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, date, month, year) VALUES ('4', '$hightIn4', '$middleIn4', '$lowIn4', '$otherIn4', '$date', '$month', '$year')") or die(mysql_error());
	
	// вывод на экран добавлений согласно сегодняшней дате
	$print = mysql_query("SELECT hight, middle, low, other, date FROM $tableName WHERE date='$date'");
	while($row = mysql_fetch_array($print)){
	// 	переменные в нормальном виде существует только внутри цикла while(????)
		$hight = $row['hight'];
		$middle = $row['middle'];
		$low = $row['low'];
		$other = $row['other'];
		$date = $row['date'];
		?>
<!-- 		<a href='it.php'><img src="../img/carousel_back_button.gif">назад</a><br>"; -->
<!-- 		<body> -->
<!-- 		<div class="get"> -->
<!-- 		<div class='main'> -->
<!-- 			<a><?//echo $db_date?></a> -->
<!-- 			<div class='colum'> -->
<!-- 				<div class='columIn'> -->
<!-- 					<textarea name='hightIn' cols='41' rows='11'><?echo $hight?></textarea> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class='colum'> -->
<!-- 				<div class='columIn'> -->
<!-- 					<textarea name='middleIn' cols='41' rows='11'><? echo $middle?></textarea> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class='colum'> -->
<!-- 				<div class='columIn'> -->
<!-- 					<textarea name='lowIn' cols='41' rows='11'><? echo $low?></textarea> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class='colum'> -->
<!-- 				<div class='columIn'> -->
<!-- 					<textarea name='otherIn' cols='41' rows='11'><?echo $other?></textarea> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 		</div> -->
<!-- 		</body> -->
		<?
	}
}//else{echo "пароль не верный!";}
}
?>


