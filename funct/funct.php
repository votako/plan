<?
// +++++++++++++++++++++++++++++++++++++++++
// получение данных по: имяТаблицы	месяц		дата		проверка
function getDateCheck($tableName = 'ito', $month = '', $getDate = '', $check = ''){
	$get = mysql_query("select hight, doneH, middle, doneM, low, doneL, other, doneO, date, month from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' order by dateChange DESC limit 4");
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
		<div class='main'>
			<a><?//echo $db_date?></a>
			<div class='hight'>
				<div class='hightIn'>
					<textarea name='hightIn' cols='41' rows='11'><?echo $hight?></textarea>
				</div>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
			</div>
			<div class='middle'>
				<div class='middleIn'>
					<textarea name='middleIn' cols='41' rows='11'><? echo $middle?></textarea>
				</div>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
			</div>
			<div class='low'>
				<div class='lowIn'>
					<textarea name='lowIn' cols='41' rows='11'><? echo $low?></textarea>
				</div>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
			</div>
			<div class='other'>
				<div class='otherIn'>
					<textarea name='otherIn' cols='41' rows='11'><?echo $other?></textarea>
				</div>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
			</div>
		</div>
		<?
	}
// 	комментарий от Шк
	$getShCommit = mysql_query("select distinct ShCommit from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' ");
	while($row = @mysql_fetch_array($getShCommit)){
		$sh = $row['ShCommit'];
		?><textarea name='ShCommit' cols='41' rows='1'><?echo $sh?></textarea><?
	}
}

function last($tableName){
	$get = mysql_query("select hight, doneH, middle, doneM, low, doneL, other, doneO, date, month from $tableName order by dateChange DESC limit 4");
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
		<div class='main'>
			<a><?echo $date.".".$month?></a>
			<div class='hight'>
				<div class='hightIn'>
					<textarea name='hightIn' cols='41' rows='11'><?echo $hight?></textarea>
				</div>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
			</div>
			<div class='middle'>
				<div class='middleIn'>
					<textarea name='middleIn' cols='41' rows='11'><? echo $middle?></textarea>
				</div>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
			</div>
			<div class='low'>
				<div class='lowIn'>
					<textarea name='lowIn' cols='41' rows='11'><? echo $low?></textarea>
				</div>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
			</div>
			<div class='other'>
				<div class='otherIn'>
					<textarea name='otherIn' cols='41' rows='11'><?echo $other?></textarea>
				</div>
				<div class=footer>Вып\НеВып (чекБоксЛибо%Выполнения)</div>
			</div>
		</div>
		<?
	}
// 	комментарий от Шк
	$getShCommit = mysql_query("select distinct ShCommit from $tableName where month = '$month' and date = '$date' limit 1");
	while($row = @mysql_fetch_array($getShCommit)){
		$sh = $row['ShCommit'];
		?><textarea name='ShCommit' cols='41' rows='1'><?echo $sh?></textarea><?
	}
}
?>


