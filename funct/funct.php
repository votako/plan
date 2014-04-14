<?
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
		global $hight1;
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
<div class=hight>
	<div class="text"><b>СверхВажно и СверхСрочно</b></div>
	<div class=hightIn>
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
					
<div class=middle>
	<div class="text"><b>Важно и Срочно</b></div>
	<div class=middleIn>
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
					
<div class=low>
	<div class="text"><b>Срочно </b>но НеВажно</div>
	<div class=lowIn>
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
					
<div class=other>
	<div class="text"><b>Важно </b>но НеСрочно</div>
	<div class=otherIn>
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
			<div class='hight'>
				<div class='hightIn'>
					<textarea name='hightIn' cols='33' rows='11'><?echo $hight?></textarea>
				</div>
			</div>
			<div class='middle'>
				<div class='middleIn'>
					<textarea name='middleIn' cols='33' rows='11'><? echo $middle?></textarea>
				</div>
			</div>
			<div class='low'>
				<div class='lowIn'>
					<textarea name='lowIn' cols='33' rows='11'><? echo $low?></textarea>
				</div>
			</div>
			<div class='other'>
				<div class='otherIn'>
					<textarea name='otherIn' cols='33' rows='11'><?echo $other?></textarea>
				</div>
			</div>
		<?
	}
	echo "<b>".@$date.".".@$month."</b>";
}

?>


