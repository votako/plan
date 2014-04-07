<?
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