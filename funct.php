<?
// данные для подключения к БД
// $hostname = "localhost";
// $username = "root";
// $password = "NIAP637";
// $dbName = "plan";
// $table = "ito";

//подключение к SQL и DB
// mysql_connect($hostname, $username, $password) or die(mysql_error());
// mysql_select_db($dbName) or die(mysql_error());
//для записи в БД русских символов и корректного их отображения.
// mysql_query('SET NAMES utf8');
// подключено

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

function getMonth(){
	//remember selected month
	session_start();
	$mon = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
	if (isset($_POST['getMonth'])) {
		$key = array_search($_POST['getMonth'], $mon);
		if ($key!==false) {
			$_SESSION['getMonth'] = $mon[$key];
		}
	}
	?>
	<select name="getMonth">
		<?foreach ($mon as $value):?>
			<option value="<? echo $value; ?>" <? if ($_SESSION['getMonth'] == $value) {echo "selected";}?>> <? echo $value; ?> </option>  
		<?endforeach; ?> 
	</select><?
	//end of remember departament
	//close session when go to another page
	session_unset();
}
?>