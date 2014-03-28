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
		echo $date.".".$month."<br>".$hight.".".$middle.".".$low.".".$other."<br>";
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
                echo $date.".".$month."<br>".$hight.".".$middle.".".$low.".".$other."<br>";
	}
}
?>
