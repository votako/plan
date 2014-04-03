<?
//get all the data from the month, shorted by date form low
// !! ONLY ckeck  == 0!!
function getAllMonthCheck0($tableName = '', $month = ''){
	$get = mysql_query("select * from $tableName where month = '$month' and `check` = 0 order by date DESC");
	while($row = mysql_fetch_array($get)){
		$date = $row['date'];
		$month = $row['month'];
		$hight = $row['hight'];
		$middle = $row['middle'];
		$low = $row['low'];
		$other = $row['other'];
		?>
		<div class='main'>
			<a><?//echo $db_date?></a>
			<div class='hight'>
				<div class='hightIn'>
					<textarea name='hightIn' cols='41' rows='11'><?echo $hight?></textarea>
				</div>
			</div>
			<div class='middle'>
				<div class='middleIn'>
					<textarea name='middleIn' cols='41' rows='11'><? echo $middle?></textarea>
				</div>
			</div>
			<div class='low'>
				<div class='lowIn'>
					<textarea name='lowIn' cols='41' rows='11'><? echo $low?></textarea>
				</div>
			</div>
			<div class='other'>
				<div class='otherIn'>
					<textarea name='otherIn' cols='41' rows='11'><?echo $other?></textarea>
				</div>
			</div>
		</div>
	<?
	}
}
//get all the data from the month, shorted by date form low
// !! ONLY ckeck  == 1!!
function getAllMonthCheck1($tableName = '', $month = ''){
	$get = mysql_query("select * from $tableName where month = '$month' and `check` = 1 order by date DESC");
	while($row = mysql_fetch_array($get)){
		$date = $row['date'];
		$month = $row['month'];
		$hight = $row['hight'];
		$middle = $row['middle'];
		$low = $row['low'];
		$other = $row['other'];
		?>
		<div class='main'>
			<a><?//echo $db_date?></a>
			<div class='hight'>
				<div class='hightIn'>
					<textarea name='hightIn' cols='41' rows='11'><?echo $hight?></textarea>
				</div>
			</div>
			<div class='middle'>
				<div class='middleIn'>
					<textarea name='middleIn' cols='41' rows='11'><? echo $middle?></textarea>
				</div>
			</div>
			<div class='low'>
				<div class='lowIn'>
					<textarea name='lowIn' cols='41' rows='11'><? echo $low?></textarea>
				</div>
			</div>
			<div class='other'>
				<div class='otherIn'>
					<textarea name='otherIn' cols='41' rows='11'><?echo $other?></textarea>
				</div>
			</div>
		</div>
	<?
	}
}


// +++++++++++++++++++++++++++++++++++++++++
// получение данных по: имяТаблицы	месяц		дата		проверка
function getDateCheck($tableName = '', $month = '', $getDate = '', $check = ''){
	$get = mysql_query("select * from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' order by date DESC");
	while($row = mysql_fetch_array($get)){
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
					<textarea name='hightIn' cols='41' rows='11'><?echo $hight.$doneH?></textarea>
				</div>
			</div>
			<div class='middle'>
				<div class='middleIn'>
					<textarea name='middleIn' cols='41' rows='11'><? echo $middle.$doneM?></textarea>
				</div>
			</div>
			<div class='low'>
				<div class='lowIn'>
					<textarea name='lowIn' cols='41' rows='11'><? echo $low.$doneL?></textarea>
				</div>
			</div>
			<div class='other'>
				<div class='otherIn'>
					<textarea name='otherIn' cols='41' rows='11'><?echo $other.$doneL?></textarea>
				</div>
			</div>
		</div>
		<?
	}
// 	комментарий от Шк
	$getTest = mysql_query("select distinct ShCommit from $tableName where month = '$month' and date = '$getDate' and `check` = '$check' ");
	while($row = mysql_fetch_array($getTest)){
		$sh = $row['ShCommit'];
		?><textarea name='ShCommit' cols='41' rows='1'><?echo $sh?></textarea><?
	}
}
?>


