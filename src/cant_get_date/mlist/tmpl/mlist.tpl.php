<input type="hidden" name="date1" value="<?= $date1 ?>">
<input type="hidden" name="date2" value="<?= $date2 ?>">
<input type="hidden" name="date_m1" value="<?= $date_m1 ?>">
<input type="hidden" name="date_m2" value="<?= $date_m2 ?>">

<!--<table align="center" cellspacing="1" cellpadding="2" border=1 bordercolor=000000>-->

<table width="100%" border="1" cellspacing="0" cellpadding="0" align="center" bordercolor="green">
<tr><td colspan="14">
Директор ДОС<br />Зав. складом<br />Коммерческий директор<br /><br />
<form method="post" action="mlistpwd.php">
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
  <tr class="row">
  <td class="header-cell">&nbsp;&nbsp;&nbsp;Водитель&nbsp;&nbsp;&nbsp;</td>
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
    <td class="header-cell">&nbsp;&nbsp;&nbsp;№ счёта&nbsp;&nbsp;&nbsp;<br /></td>
  </tr>
  <?= $content ?>

</table>
</form>
