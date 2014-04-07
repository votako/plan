<p align="center"><font color="#FF0000" face="Verdana"><b><?= $message ?></b></font></p>

<script language="JavaScript" src="lib/overlib_mini.js" type="text/javascript"></script>

<!-- main calendar program -->
  <script type="text/javascript" src="calendar/calendar.js"></script>
  <!-- language for the calendar -->
  <script type="text/javascript" src="calendar/lang/calendar-ru_win_.js"></script>
  <!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript" src="calendar/calendar-setup.js"></script>
  
<form method=post action=delete.php>
<input type="hidden" name="action" value="del">
<table border="0"  cellpadding=0 cellspacing=0 width="45%" align=center id="table1">
	<tr>
		<td>Удалить данные за:</td>
		<td><input type="text" name="d_to" id="f_date_c1" value=<?=date('dmY', mktime()-86400);?> readonly="1" size="20"/>
                <img src="img/img.gif" id="f_trigger_c1" style="cursor: pointer; border: 0px solid red;" title="Date selector"/></td>
	</tr>
	<tr>
		<td>Введите пароль:</td>
		<td><input type="password" name="password" size="20"/></td>
	</tr>
	<tr>
		<td>Выберите подразделение:</td>
		<td>
                <select size="1" name="p">
	        <option></option>
	        <option value="1">ОЛИМП</option>
	        <option value="2">ТОПОЛЁК</option>
                </td>
	</tr>
	
        
        
        
        <tr>
		<td colspan="2"><a href="javascript:document.forms[0].submit();" class="submit-link"><img src="img/set.gif" border="0"></a></td>
	</tr>
	

</table>

</form>

<script type="text/javascript">
    Calendar.setup({
        inputField     :    "f_date_c1",     // id of the input field
        ifFormat       :    "%d%m%Y",      // format of the input field
        button         :    "f_trigger_c1",  // trigger for the calendar (button ID)
        align          :    "Tl",           // alignment (defaults to "Bl")
        singleClick    :    true
    });
</script>



