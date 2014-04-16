<?
// данные для подключения к БД
$hostname = "localhost";
$username = "root";
$password = "NIAP637";
$dbName = "plan";
$table = "ito";

//подключение к SQL и DB
mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($dbName) or die(mysql_error());
//для записи в БД русских символов и корректного их отображения.
mysql_query('SET NAMES utf8');
// подключено

$ito = "ito";
// значения из формы ввода планов.
$date = mysql_query("select COUNT(*) from $ito where `check` = 0");
if(mysql_result($date, 0) != 0){
	$getId1 = mysql_query("select hight, doneH, middle, doneM, low, doneL, other, doneO, date, month from ito where `check` = 0 and id = 1 order by dateChange DESC limit 4");
	while($row = @mysql_fetch_array($getId1)){
		$getHight1 = $row['hight'];
		$doneH1 = $row['doneH'];
		
		$getMiddle1 = $row['middle'];
		$doneM1 = $row['doneM'];
		
		$getLow1 = $row['low'];
		$doneL1 = $row['doneL'];
		
		$getOther1 = $row['other'];
		$doneO1 = $row['doneO'];
	}

	$getId2 = mysql_query("select hight, doneH, middle, doneM, low, doneL, other, doneO, date, month from ito where `check` = 0 and id = 2 order by dateChange DESC limit 4");
	while($row = @mysql_fetch_array($getId2)){
// 		$date = $row['date'];
// 		$month = $row['month'];
		
		$getHight2 = $row['hight'];
		$doneH2 = $row['doneH'];
		
		$getMiddle2 = $row['middle'];
		$doneM2 = $row['doneM'];
		
		$getLow2 = $row['low'];
		$doneL2 = $row['doneL'];
		
		$getOther2 = $row['other'];
		$doneO2 = $row['doneO'];
	}

	$getId3 = mysql_query("select hight, doneH, middle, doneM, low, doneL, other, doneO, date, month from ito where `check` = 0 and id = 3 order by dateChange DESC limit 4");
	while($row = @mysql_fetch_array($getId3)){
// 		$date = $row['date'];
// 		$month = $row['month'];
		
		$getHight3 = $row['hight'];
		$doneH3 = $row['doneH'];
		
		$getMiddle3 = $row['middle'];
		$doneM3 = $row['doneM'];
		
		$getLow3 = $row['low'];
		$doneL3 = $row['doneL'];
		
		$getOther3 = $row['other'];
		$doneO3 = $row['doneO'];
	}

	$getId4 = mysql_query("select hight, doneH, middle, doneM, low, doneL, other, doneO, date, month from ito where `check` = 0 and id = 4 order by dateChange DESC limit 4");
	while($row = @mysql_fetch_array($getId4)){
		$date = $row['date'];
		$month = $row['month'];
		
		$getHight4 = $row['hight'];
		$doneH4 = $row['doneH'];
		
		$getMiddle4 = $row['middle'];
		$doneM4 = $row['doneM'];
		
		$getLow4 = $row['low'];
		$doneL4 = $row['doneL'];
		
		$getOther4 = $row['other'];
		$doneO4 = $row['doneO'];
	}
}
// ++++++++++++++++++++++++++++++++++++++++++++++++++

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
	global $getHight1;
	global $getHight2;
	global $getHight3;
	global $getHight4;

	global $getMiddle1;
	global $getMiddle2;
	global $getMiddle3;
	global $getMiddle4;

	global $getLow1;
	global $getLow2;
	global $getLow3;
	global $getLow4;

	global $getOther1;
	global $getOther2;
	global $getOther3;
	global $getOther4;
	
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
				<input value="Добавить заготовку" name="blank" type="submit">
			</div>
		</div>
		<!-- 		ввод данных разбит на важности. от высокой к низкой	 -->
		<div class=colum>
			<div class="text"><b>СверхВажно и СверхСрочно</b></div>
			<div class=columIn>
				<textarea name="hightIn1" cols="41" rows="10"><?echo $getHight1?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="hightIn2" cols="41" rows="10"><?echo $getHight2?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="hightIn3" cols="41" rows="10"><?echo $getHight3?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="hightIn4" cols="41" rows="10"><?echo $getHight4?></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
		</div>
					
		<div class=colum>
			<div class="text"><b>Важно и Срочно</b></div>
			<div class=columIn>
				<textarea name="middleIn1" cols="41" rows="10"><?echo $getMiddle1?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="middleIn2" cols="41" rows="10"><?echo $getMiddle2?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="middleIn3" cols="41" rows="10"><?echo $getMiddle3?></textarea>
	<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="middleIn4" cols="41" rows="10"><?echo $getMiddle4?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
			</div>
		</div>
					
		<div class=colum>
			<div class="text"><b>Срочно </b>но НеВажно</div>
			<div class=columIn>
				<textarea name="lowIn1" cols="41" rows="10"><?echo $getLow1?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="lowIn2" cols="41" rows="10"><?echo $getLow2?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="lowIn3" cols="41" rows="10"><?echo $getLow3?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="lowIn4" cols="41" rows="10"><?echo $getLow4?></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
		</div>
					
		<div class=colum>
			<div class="text"><b>Важно </b>но НеСрочно</div>
			<div class=columIn>
				<textarea name="otherIn1" cols="41" rows="10"><?echo $getOther1?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="otherIn2" cols="41" rows="10"><?echo $getOther2?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="otherIn3" cols="41" rows="10"><?echo $getOther3?></textarea>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
				<textarea name="otherIn4" cols="41" rows="10"><?echo $getOther4?></textarea>
			</div>
		<!-- 				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div> -->
		</div>
	</div>
</form>
<?
	@$date = $_POST['date'];
	@$month = $_POST['month'];
	@$year = $_POST['year'];
	// значения из формы ввода планов.
	@$hightIn1 = $_POST['hightIn1'];
	@$hightIn2 = $_POST['hightIn2'];
	@$hightIn3 = $_POST['hightIn3'];
	@$hightIn4 = $_POST['hightIn4'];

	@$middleIn1 = $_POST['middleIn1'];
	@$middleIn2 = $_POST['middleIn2'];
	@$middleIn3 = $_POST['middleIn3'];
	@$middleIn4 = $_POST['middleIn4'];

	@$lowIn1 = $_POST['lowIn1'];
	@$lowIn2 = $_POST['lowIn2'];
	@$lowIn3 = $_POST['lowIn3'];
	@$lowIn4 = $_POST['lowIn4'];

	@$otherIn1 = $_POST['otherIn1'];
	@$otherIn2 = $_POST['otherIn2'];
	@$otherIn3 = $_POST['otherIn3'];
	@$otherIn4 = $_POST['otherIn4'];

	@$pwd = $_POST['pwd'];
	@$add = $_POST['add'];
	@$blank = $_POST['blank'];
	if($pwd == 1 && $add){
		// дата(сегодня)
		// добавления в БД значений из формы ввода данных с датой.
		mysql_query("update $tableName set id = '1', hight = '$hightIn1', middle = '$middleIn1', low = '$lowIn1', other = '$otherIn1', `check` = '1', date = '$date', month = '$month', year = '$year' where `check` = 0 and id = 1") or die(mysql_error());
		mysql_query("update $tableName set id = '2', hight = '$hightIn2', middle = '$middleIn2', low = '$lowIn2', other = '$otherIn2', `check` = '1', date = '$date', month = '$month', year = '$year' where `check` = 0 and id = 2") or die(mysql_error());
		mysql_query("update $tableName set id = '3', hight = '$hightIn3', middle = '$middleIn3', low = '$lowIn3', other = '$otherIn3', `check` = '1', date = '$date', month = '$month', year = '$year' where `check` = 0 and id = 3") or die(mysql_error());
		mysql_query("update $tableName set id = '4', hight = '$hightIn4', middle = '$middleIn4', low = '$lowIn4', other = '$otherIn4', `check` = '1', date = '$date', month = '$month', year = '$year' where `check` = 0 and id = 4") or die(mysql_error());
	}else if($pwd == 1 && 	$blank){
		mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, `check`, date, month, year) VALUES ('1', '$hightIn1', '$middleIn1', '$lowIn1', 	'$otherIn1', '0', '$date', '$month', '$year')") or die(mysql_error());
		mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, `check`, date, month, year) VALUES ('2', '$hightIn2', '$middleIn2', '$lowIn2', '$otherIn2', '0', '$date', '$month', '$year')") or die(mysql_error());
		mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, `check`, date, month, year) VALUES ('3', '$hightIn3', '$middleIn3', '$lowIn3', '$otherIn3', '0', '$date', '$month', '$year')") or die(mysql_error());
		mysql_query("INSERT INTO $tableName(id, hight, middle, low, other, `check`, date, month, year) VALUES ('4', '$hightIn4', '$middleIn4', '$lowIn4', '$otherIn4', '0', '$date', '$month', '$year')") or die(mysql_error());
	}
}
?>


