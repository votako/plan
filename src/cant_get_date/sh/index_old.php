<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css.css">
<?
// подключаем файл с функциями
include 'funct.php';
$getData = 'getFromDb';

// данные для подключения к БД
$hostname = "localhost";
$username = "root";
$password = "NIAP637";
$dbName = "plan";
$ito = "ito";

//подключение к SQL и DB
$connect = mysql_connect($hostname, $username, $password) or die("<br/>no connect to sql<br/>");
mysql_select_db($dbName) or die("no connect to DB");
// подключено

?>
<div class="spoil"><!-- 	 открытие спойтера1 -->
<!-- 	 открытие спойтера2 -->
	<div class="smallfont"><input type="button" value="ИТО" class="input-button" onclick="if 
		(this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') 
		{ this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; 
		this.innerText = ''; this.value = 'Свернуть'; } else 
		{ this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; 
		this.value = 'ИТО'; }"/>
	</div><!-- 	 закрытие спойтера2^-->
	<div class="alt2"><!--  	открытие спойтера3-->
		<div style="display: none;"><!-- 	 открытие спойтера4-->

			<?
			// получаем даты из БД(без дублей(DISTINCT), только НЕ проверенное, отсортированное по дате от последней)
			$print = mysql_query("SELECT DISTINCT date FROM $ito WHERE 'check' = 0 ORDER BY date");
				while($row = mysql_fetch_array($print)){
					$db_date = $row['date'];
					?>
					<div class="spoil">
						<!-- 	 открытие спойтера2 -->
						<div class="smallfont"><input type="button" value="<?echo $db_date;?>" class="input-button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Свернуть'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = '<?echo $db_date;?>'; }"/>
						</div><!-- 	 закрытие спойтера2^-->
						
						<div class="alt2"><!--  	открытие спойтера3-->
							<div style="display: none;"><!-- 	 открытие спойтера4-->
								<?
								$getData('ito', $db_date);?>
								<form method="post" action="index.php">
									<input type="checkbox" name="check" value="1">
									<input value="Проверено" type="submit"><hr>
								</form>
							</div><!-- 	 закрытие спойтера4-->
						</div><!-- 	 закрытие спойтера3-->
					</div><!-- 	 закрытие спойтера1(spoil)-->
				<?}?>
		</div><!-- 	 закрытие спойтера4-->
	</div><!-- 	 закрытие спойтера3-->
</div><!-- 	 закрытие спойтера1(spoil)-->
