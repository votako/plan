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
// !! ONLY ckeck  == 0!!
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
?>
