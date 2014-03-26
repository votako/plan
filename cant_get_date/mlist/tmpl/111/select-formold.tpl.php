<script language="JavaScript" src="lib/overlib_mini.js" type="text/javascript"></script>

<!-- main calendar program -->
  <script type="text/javascript" src="calendar/calendar.js"></script>
  <!-- language for the calendar -->
  <script type="text/javascript" src="calendar/lang/calendar-ru_win_.js"></script>
  <!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript" src="calendar/calendar-setup.js"></script>
<form action="oldindex.php" method="post">
<br>
<table cellspacing="0" cellpadding="0" style="border-collapse: collapse" align=center><tr>
<td>
<a href="#" onmouseover="return overlib('Поле для выбора даты для отображения. При выборе только одной даты - отображаются данные ТОЛЬКО за выбранную дату.', BELOW, RIGHT);" onmouseout="return nd();" ><img src="img/tooltip.png" border="0" alt=""/></a>
<b>Дата 1 :</b><input type="text" name="date_m1" id="f_date_c" readonly="1" size="10"/>
</td>
<td><img src="img/img.gif" id="f_trigger_c" style="cursor: pointer; border: 0px solid red;" title="Выбор даты"/>&nbsp;</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onmouseover="return overlib('Поле для выбора даты для отображения.', BELOW, RIGHT);" onmouseout="return nd();" ><img src="img/tooltip.png" border="0" alt=""/></a>
<b>Дата 2:</b><input type="text" name="date_m2" id="f_date_c1" readonly="1" size="10"/>
</td>
<td><img src="img/img.gif" id="f_trigger_c1" style="cursor: pointer; border: 0px solid red;" title="Выбор даты"/>&nbsp;
<a href="javascript:document.forms[0].submit();" class="submit-link"><img src="img/view.gif" border="0">
<!--<input type="submit" value="View alerts">--></td>
</table>
</div>
</form>

<script type="text/javascript">
    Calendar.setup({
        inputField     :    "f_date_c1",     // id of the input field
        ifFormat       :    "%d-%m-%Y",      // format of the input field
        button         :    "f_trigger_c1",  // trigger for the calendar (button ID)
        align          :    "Tl",           // alignment (defaults to "Bl")
        singleClick    :    true
    });
</script>
<script type="text/javascript">
    Calendar.setup({
        inputField     :    "f_date_c",     // id of the input field
        ifFormat       :    "%d-%m-%Y",      // format of the input field
        button         :    "f_trigger_c",  // trigger for the calendar (button ID)
        align          :    "Tl",           // alignment (defaults to "Bl")
        singleClick    :    true
    });
</script>

