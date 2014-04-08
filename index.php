<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
@$Password = $_REQUEST['password'];
if ($Password == '1'){
    header("Location: it.php"); 
 
}elseif($Password == '2'){
	header("Location: sh.php"); 
}else { ?>
<html>
	<style>
		body{
			background-color: #666666;
		}
		.main{
			padding-left: 35%; /* Поле слева */
			padding-top: 10%; /* Поле сверху */
		}
		.inn{
			padding-top: 5%;
			text-align: center;
			width: 400px;
			height: 100px;
			border: 1px solid #E5E5E5;
			border-radius: 5px;
			box-shadow: 0px 2px 10px -1px rgba(200, 200, 200, 0.698);
			background: none repeat scroll 0% 0% #FFF;
		}
	</style>

	<body>
		<form name="form" action="index.php">
			<div class="main">
				<a href="http://www.topolyok.com.ua"><img src="topol.png"></a>
			<div class="inn">
				<FONT face="Comic Sans MS">Введите пароль:</FONT>
				<br><br> 
				<input type="password" name="password" value="">
				<input type="submit" name="button" value="OK" />
			</div>
			</div>
		</form>
	</body>
</html>
<?}
?>