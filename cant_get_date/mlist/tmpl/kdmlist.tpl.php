<input type="hidden" name="date1" value="<?= $date1 ?>">
<input type="hidden" name="date2" value="<?= $date2 ?>">
<input type="hidden" name="date_m1" value="<?= $date_m1 ?>">
<input type="hidden" name="date_m2" value="<?= $date_m2 ?>">

<script type="text/javascript" src="datepickercontrol/datepickercontrol.js"></script>
<link type="text/css" rel="stylesheet" href="datepickercontrol/datepickercontrol.css">
<input type="hidden" id="DPC_TODAY_TEXT" value="сегодня">
<input type="hidden" id="DPC_BUTTON_TITLE" value="Открыть календарь...">
<input type="hidden" id="DPC_MONTH_NAMES" value="['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь']">
<input type="hidden" id="DPC_DAY_NAMES" value="['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Су']">
<input type="hidden" id="DPC_WEEK_NUMBER" value="true">
<input type="hidden" id="DPC_FIRST_WEEK_DAY" value="1">


<!--<table align="center" cellspacing="1" cellpadding="2" border=1 bordercolor=000000>-->
<table width="100%" border="1" cellspacing="0" cellpadding="0" align="center" bordercolor="green">
<tr>
	<td colspan="14">
				Директор ДОС<br />Зав. складом<br />Коммерческий директор<br /><br />
				<strong>
					<font>
						Маршрутный лист на: <?echo "$datem"; ?>
				    </font><br />
						Водитель: <?echo "$driver_ml"; ?>
		        </strong>
		    <form method="post" action="kdmlist.php">
				<input type="hidden" name="action" value="printdr" />
			  
				<select name="driver_d">
					<option value=></option>
					<option value=НеЕдет>Не едет</option>
					<option value=Волобуев>Волобуев В.Г.</option>
					<option value=Диханов>Диханов В.В.</option>
					<option value=Климов>Климов А.Б.</option>
					<option value=Пенцов>Пенцов С.А.</option>
			  	</select>

				<input type="text" name="date_to" id="date_to" value="<?=$datem;?>" datepicker="true" datepicker_format="DD.MM.YY">
			  	<!--<a href="javascript:submitformdr();" class="submit-link">Отсортировать</a>-->
			  	<!--<a href="javascript:document.forms[<?=$id+1?>].submit();" class="submit-link">Отсортировать</a>-->
			  	<input type="submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://topolyok.com.ua/all/blank/new/stat_driver.php" target="_blank">Водители</a>
			    <a href="http://topolyok.com.ua/all/blank/new/stat_manager.php" target="_blank">Менеджеры</a>
		    </form>
		<table>
		    <tr>
			    <td>
					<form method="post" action="kdmlist.php">
					    <input type="hidden" name="action" value="add" />
					    <input type="hidden" name="date_to" value="<?=$datem;?>" />
					    <input type="hidden" name="date_drp" value="<?=$datem;?>" />
					    <input type="submit" value="Добавить развоз ДРП" />
					</form>
			    </td>
			    
			    <td>
					<form method="post" action="kdmlist.php">
						<input type="hidden" name="action" value="addnk" />
						<input type="hidden" name="date_to" value="<?=$datem;?>" />
						<input type="hidden" name="date_nk" value="<?=$datem;?>" />
						<input type="submit" value="Добавить стойки НК" />
				   	</form>
			    </td>
			    
			    <td>
				  	<form method="post" action="kdmlist.php">
						<input type="hidden" name="action" value="ofs" />
						<input type="hidden" name="date_to" value="<?=$datem;?>" />
						<input type="submit" value="Список ОФС" />
				  	</form>
			    </td>
			    
			    <td>
				  	<form method="post" action="kdmlist.php">
						<input type="hidden" name="action" value="search" />
						<input type="text" name="to_firm" value="Фирма?" />
						Месяц:<select name="month">
							<option value=></option>
							<option value=01>Январь</option>
							<option value=02>Февраль</option>
							<option value=03>Март</option>
							<option value=04>Апрель</option>
							<option value=05>Май</option>
							<option value=06>Июнь</option>
							<option value=07>Июль</option>
							<option value=08>Август</option>
							<option value=09>Сентябрь</option>
							<option value=10>Октябрь</option>
							<option value=11>Ноябрь</option>
							<option value=12>Декабрь</option>
						</select>
						Год:<select name="year">
							<option value=></option>
							<option value=08>2008</option>
							<option value=09>2009</option>
							<option value=10>2010</option>
							<option value=11>2011</option>
						</select>
						<input type="submit" value="Поиск" />
				  	</form>
			    </td>
		    </tr>
		</table>
	</td>

</tr>
	<tr class="row">
	  	<td class="header-cell">&nbsp;&nbsp;&nbsp;<a href="<?= $sortorderd ?>">Водитель</a>&nbsp;&nbsp;&nbsp;<br />

	  	</td>
	  	<td class="header-cell">&nbsp;<span lang="ru">№</span><br /></td>
	  	<td class="header-cell">&nbsp;&nbsp;&nbsp;<a href="<?= $sortorder ?>">Отдел</a>&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;Фирма&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;Время&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;Док отдать&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;Док забрать&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;Адрес&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;Лицо&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;Действия&nbsp;&nbsp;&nbsp;<br /></td>
	    <!--<td class="header-cell">&nbsp;&nbsp;&nbsp;№ декларации, кол-во мест&nbsp;&nbsp;&nbsp;<br /></td>-->
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;Марка бумаги&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;Кол-во пачек&nbsp;&nbsp;&nbsp;<br /></td>
	    <!--<td class="header-cell">&nbsp;&nbsp;&nbsp;Марка бумаги2&nbsp;&nbsp;&nbsp;<br /></td>-->
	    <!--<td class="header-cell">&nbsp;&nbsp;&nbsp;Кол-во пачек2&nbsp;&nbsp;&nbsp;<br /></td>-->
	    <!--<td class="header-cell">&nbsp;&nbsp;&nbsp;Марка бумаги3&nbsp;&nbsp;&nbsp;<br /></td>-->
	    <!--<td class="header-cell">&nbsp;&nbsp;&nbsp;Кол-во пачек3&nbsp;&nbsp;&nbsp;<br /></td>-->
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;Менеджер&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;ДПД&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;Сумма&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;Номер счёта&nbsp;&nbsp;&nbsp;<br /></td>
	</tr>
  <?= $content ?>

</table>
