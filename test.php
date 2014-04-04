<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cssGet.css">

<a href="done/sh.php">sh</a><br>
<a href="it.php">it</a><br>
<a href="index.php">localhost</a><br>
<?
// данные для подключения к БД
$hostname = "localhost";
$username = "root";
$password = "NIAP637";
$dbName = "plan";
$ito = "ito";

//подключение к SQL и DB
$connect = mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($dbName) or die(mysql_error());
//для записи в БД русских символов и корректного их отображения.
mysql_query('SET NAMES utf8');
// подключено



$get1 = mysql_query("select * from ito where date = '1-1' and id = '1'");
while($row = mysql_fetch_array($get1)){
	$hight1 = $row['hight'];
	$middle1 = $row['middle'];
	$low1 = $row['low'];
	$other1 = $row['other'];
}

$get2 = mysql_query("select * from ito where date = '1-1' and id = '2'");
while($row = mysql_fetch_array($get2)){
	$hight2 = $row['hight'];
	$middle2 = $row['middle'];
	$low2 = $row['low'];
	$other2 = $row['other'];
}

$get3 = mysql_query("select * from ito where date = '1-1' and id = '3'");
while($row = mysql_fetch_array($get3)){
	$hight3 = $row['hight'];
	$middle3 = $row['middle'];
	$low3 = $row['low'];
	$other3 = $row['other'];
}

$get4 = mysql_query("select * from ito where date = '1-1' and id = '4'");
while($row = mysql_fetch_array($get4)){
	$hight4 = $row['hight'];
	$middle4 = $row['middle'];
	$low4 = $row['low'];
	$other4 = $row['other'];
}
?>
<form method="post" action="test.php">

<div class=main>
	<div class=hight>
		<div class=hightIn>
			<textarea name="hightIn1" cols="41" rows="10"><?echo $hight1?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="hightInFooter1" cols="20" rows="1"></textarea>
		</div>
						
		<div class=hightIn>
			<textarea name="hightIn2" cols="41" rows="10"><?echo $hight2?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="hightInFooter2" cols="20" rows="1"></textarea>
		</div>
						
		<div class=hightIn>
			<textarea name="hightIn3" cols="41" rows="10"><?echo $hight3?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="hightInFooter3" cols="20" rows="1"></textarea>
		</div>
					
		<div class=hightIn>
			<textarea name="hightIn4" cols="41" rows="10"><?echo $hight4?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="hightInFooter4" cols="20" rows="1"></textarea>
		</div>
	</div>
				
	<div class=middle>
		<div class=middleIn>
			<textarea name="middleIn1" cols="41" rows="10"><?echo $middle1?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="middleInFooter1" cols="20" rows="1"></textarea>
		</div>
						
		<div class=middleIn>
			<textarea name="middleIn2" cols="41" rows="10"><?echo $middle2?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="middleInFooter2" cols="20" rows="1"></textarea>
		</div>
						
		<div class=middleIn>
			<textarea name="middleIn3" cols="41" rows="10"><?echo $middle3?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="middleInFooter3" cols="20" rows="1"></textarea>
		</div>
						
		<div class=middleIn>
			<textarea name="middleIn4" cols="41" rows="10"><?echo $middle4?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="middleInFooter4" cols="20" rows="1"></textarea>
		</div>
	</div>
				
	<div class=low>
		<div class=lowIn>
			<textarea name="lowIn1" cols="41" rows="10"><?echo $low1?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="lowInFooter1" cols="20" rows="1"></textarea>
		</div>
						
		<div class=lowIn>
			<textarea name="lowIn2" cols="41" rows="10"><?echo $low2?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="lowInFooter2" cols="20" rows="1"></textarea>
		</div>
						
		<div class=lowIn>
			<textarea name="lowIn3" cols="41" rows="10"><?echo $low3?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="lowInFooter3" cols="20" rows="1"></textarea>
		</div>
						
		<div class=lowIn>
			<textarea name="lowIn4" cols="41" rows="10"><?echo $low4?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="lowInFooter4" cols="20" rows="1"></textarea>
		</div>
	</div>
					
	<div class=other>
		<div class=otherIn>
			<textarea name="otherIn1" cols="41" rows="10"><?echo $other1?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="otherInFooter1" cols="20" rows="1"></textarea>
		</div>
						
		<div class=otherIn>
			<textarea name="otherIn2" cols="41" rows="10"><?echo $other2?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="otherInFooter2" cols="20" rows="1"></textarea>
		</div>
						
		<div class=otherIn>
			<textarea name="otherIn3" cols="41" rows="10"><?echo $other3?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="otherInFooter3" cols="20" rows="1"></textarea>
		</div>
						
		<div class=otherIn>
			<textarea name="otherIn4" cols="41" rows="10"><?echo $other4?></textarea>
		</div>
		<div class=hightInFooter>
			<textarea name="otherInFooter4" cols="20" rows="1"></textarea>
		</div>
	</div>
</div>

<input value="Проверено" type="submit">
<input type="checkbox" name="check" value="1">
</form>
<br><br>
<hr>

<?
@$hightInFooter1 = $_POST['hightInFooter1'];
@$hightInFooter2 = $_POST['hightInFooter2'];
@$hightInFooter3 = $_POST['hightInFooter3'];
@$hightInFooter4 = $_POST['hightInFooter4'];

if($_POST['check'] == 1){
	mysql_query("update ito set doneH = '$hightInFooter1' where date = '1-1' and id = '1'");
	mysql_query("update ito set doneH = '$hightInFooter2' where date = '1-1' and id = '2'");
	mysql_query("update ito set doneH = '$hightInFooter3' where date = '1-1' and id = '3'");
	mysql_query("update ito set doneH = '$hightInFooter4' where date = '1-1' and id = '4'");
}
?>