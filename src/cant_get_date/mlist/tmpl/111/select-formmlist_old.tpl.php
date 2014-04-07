
<script language="JavaScript" src="lib/overlib_mini.js" type="text/javascript"></script>

<!-- main calendar program -->
  <script type="text/javascript" src="calendar/calendar.js"></script>
  <!-- language for the calendar -->
  <script type="text/javascript" src="calendar/lang/calendar-ru_win_.js"></script>
  <!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript" src="calendar/calendar-setup.js"></script>
  
<form method=post action=mlist.php>
<input type="hidden" name="action" value="add">
<table border="0"  cellpadding=0 cellspacing=0 width="45%" align=center id="table1">
	<tr>
		<td colspan="2">
                <p align="center"  ><b>Добавить: </b><br></td>
	</tr>
		<tr>
	<td class="even-cell">Подразделение:</td>
        <td ><!--<input type="text" name="podr" >-->
<select name="podr">
<option value=OFS >Офис-Сервис</option>
<option value=Zakupki >Закупки</option>
<option value=Alekseevka>На Алексеевке</option>
<option value=Filial1>Филиал1</option>
<option value=Filial2>Филиал2</option>
<option value=Filial4>Филиал4</option>
<option value=Filial5>Филиал5</option>
<option value=Filial6>Филиал6</option>
<option value=Filial7>Филиал7</option>
<option value=Filial8>Филиал8</option>
<option value=Filial9>Филиал9</option>
<option value=Filial10>Филиал10</option>
<option value=AXO>AXO</option>
<option value=DRP>DRP</option>
<option value=Маркетологи>Маркетологи</option>
<option value=Юровских>Юровских</option>
</select>
        
        
        </td>
	</tr>
	<tr>
        <td  class="odd-cell">Клиент/Поставщик:</td>
        <td><input type="text" name="to_firm" ></td>
	</tr>
	<tr>
        <td  class="even-cell">Время. Режим работы (с, до, перерыв). Желаемое время доставки:
        
        
        </td>
        <td><input type="text" name="to_time" ></td>
	</tr>
        <tr>
        <td class="odd-cell" width="34%">Отдать Документы:</td>
        <td><input type="text" name="docs" ></td>
        <tr>
	<td class="even-cell">Забрать Документы:</td>
	<td ><input type="text" name="place_num" ></td>
	</tr>        
        <tr>    
	<td class="odd-cell">Адрес:</td>
	<td ><input type="text" name="address" ></td>
	</tr>
	<tr>
        <td  class="even-cell">Лицо + контактный телефон:</td>
        <td><input type="text" name="to_face" ></td>
	</tr>
	<tr>
        <td  class="odd-cell">Действия:</td>
        <td><input type="text" name="todo" ></td>
	</tr>
        <tr>
        <td class="even-cell" width="34%">№ Квитанции, к-во мест:</td>
        <td><input type="text" name="doc_num" ></td>
	<tr>
        <td  class="odd-cell">Менеджер:</td>
        <td><input type="text" name="manager" ></td>
	</tr>
	<tr>
        <td  class="even-cell">Дата поступления денег:</td>
        
        <td>
        <input type="text" name="d_mon" id="f_date_c" size="20"/>
<img src="img/img.gif" id="f_trigger_c" style="cursor: pointer; border: 0px solid red;" title="Date selector"/>&nbsp;                
        </td>
	</tr> 
	<tr>
        <td  class="odd-cell">Номер счёта:</td>
        <td><input type="text" name="invnum" ></td>
	</tr>
        
	<tr>
        <td  class="even-cell">Сумма:</td>
        <td><input type="text" name="sum" ></td>
	</tr>       
<tr>
        <td  class="odd-cell">Внести в маршрутный лист на дату:</td>
        
        <td>
        <input type="text" name="d_to" id="f_date_c1" value=<?=date('d.m.y', mktime()+86400);?> readonly="1" size="20"/>
<img src="img/img.gif" id="f_trigger_c1" style="cursor: pointer; border: 0px solid red;" title="Date selector"/>&nbsp;                
        </td>
	</tr>        
        
        
        </tr>

</table>

<p align="center">
<a href="javascript:document.forms[0].submit();" class="submit-link"><img src="img/set.gif" border="0"></a>
</form>
<script type="text/javascript">
    Calendar.setup({
        inputField     :    "f_date_c",     // id of the input field
        ifFormat       :    "%d.%m.%y",      // format of the input field
        button         :    "f_trigger_c",  // trigger for the calendar (button ID)
        align          :    "Tl",           // alignment (defaults to "Bl")
        singleClick    :    true
    });
</script>
<script type="text/javascript">
    Calendar.setup({
        inputField     :    "f_date_c1",     // id of the input field
        ifFormat       :    "%d.%m.%y",      // format of the input field
        button         :    "f_trigger_c1",  // trigger for the calendar (button ID)
        align          :    "Tl",           // alignment (defaults to "Bl")
        singleClick    :    true
    });
</script>


<script type="text/javascript">
function check_checkbox(form_name)
{
    for(i=0; i<document.forms[form_name].length; i++)
    {
        if(document.forms[form_name].elements[i].type == "checkbox")
        {
            if(document.forms[form_name].elements[i].checked)
            {
                continue;
            }
            else
            {
                document.forms[form_name].elements[i].checked = 'checked';
                
            }
        }
    }
}
</script>
Распечатать за: <?= $print_arr ?>
