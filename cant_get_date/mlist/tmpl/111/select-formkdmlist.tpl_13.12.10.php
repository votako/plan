
<script language="JavaScript" src="lib/overlib_mini.js" type="text/javascript"></script>

<!-- main calendar program -->
<script type="text/javascript" src="calendar/calendar.js"></script>
<!-- language for the calendar -->
<script type="text/javascript" src="calendar/lang/calendar-ru_win_.js"></script>
<!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
<script type="text/javascript" src="calendar/calendar-setup.js"></script>


  
<form name="myform" method=post action=kdmlist.php>
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
<option value=Офис-Сервис>Офис-Сервис</option>
<option value=ОФС-уд(7313179)>ОФС-уд</option>
<option value=Закупки>Закупки</option>
<option value=СНА>СНА</option>
<option value=Филиал2(7143568)>Филиал2</option>
<option value=Филиал4(7327410)>Филиал4</option>
<option value=Филиал5(7176177)>Филиал5</option>
<option value=Филиал6(7730080)>Филиал6</option>
<option value=Филиал7(7161617)>Филиал7</option>
<option value=Филиал8(7004886)>Филиал8</option>
<option value=Филиал9(7162274)>Филиал9</option>
<option value=Филиал10(7510101)>Филиал10</option>
<option value=AXO>AXO</option>
<option value=ДРП>ДРП</option>
<option value=Маркетологи>Маркетологи</option>
<option value=Юровских>Юровских</option>
<option value=ИТО>ИТО</option>
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
        <td  class="even-cell">№ декларации, кол-во мест</td>
        <td><input type="text" name="num_dec" ></td>
	</tr>
        <tr>
        <td class="odd-cell" width="34%">Марка бумаги1:</td>
        <td><select name="doc_num" >
                <option value=""></option>
                <option value="Maestro_A4">Maestro_A4</option>
                <option value="SvetoCopy_A4">SvetoCopy_A4</option>
                <option value="KymLux_A4">KymLux_A4</option>
                <option value="Xerox_A4">Xerox_A4</option>
                <option value="LazerCopy_A4">LazerCopy_A4</option>
                <option value="Skiper_A4">Skiper_A4</option>
                <option value="Maestro_A3">Maestro_A3</option>
                <option value="SvetoCopy_A3">SvetoCopy_A3</option>
                <option value="KymLux_A3">KymLux_A3</option>
                <option value="Xerox_A3">Xerox_A3</option>
                <option value="LazerCopy_A3">LazerCopy_A3</option>
            </select></td>
        <td class="odd-cell" width="34%">Количество пачек1:</td>
        <td><input type="text" name="doc_pkg" ></td>
        </tr>
        <tr>
        <td class="odd-cell" width="34%">Марка бумаги2:</td>
        <td><select name="doc_num1" >
                <option value=""></option>
                <option value="Maestro_A4">Maestro_A4</option>
                <option value="SvetoCopy_A4">SvetoCopy_A4</option>
                <option value="KymLux_A4">KymLux_A4</option>
                <option value="Xerox_A4">Xerox_A4</option>
                <option value="LazerCopy_A4">LazerCopy_A4</option>
                <option value="Skiper_A4">Skiper_A4</option>
                <option value="Maestro_A3">Maestro_A3</option>
                <option value="SvetoCopy_A3">SvetoCopy_A3</option>
                <option value="KymLux_A3">KymLux_A3</option>
                <option value="Xerox_A3">Xerox_A3</option>
                <option value="LazerCopy_A3">LazerCopy_A3</option>
            </select></td>
        <td class="odd-cell" width="34%">Количество пачек2:</td>
        <td><input type="text" name="doc_pkg1" ></td>
        </tr>
        <tr>
        <td class="odd-cell" width="34%">Марка бумаги3:</td>
        <td><select name="doc_num2" >
                <option value=""></option>
                <option value="Maestro_A4">Maestro_A4</option>
                <option value="SvetoCopy_A4">SvetoCopy_A4</option>
                <option value="KymLux_A4">KymLux_A4</option>
                <option value="Xerox_A4">Xerox_A4</option>
                <option value="LazerCopy_A4">LazerCopy_A4</option>
                <option value="Skiper_A4">Skiper_A4</option>
                <option value="Maestro_A3">Maestro_A3</option>
                <option value="SvetoCopy_A3">SvetoCopy_A3</option>
                <option value="KymLux_A3">KymLux_A3</option>
                <option value="Xerox_A3">Xerox_A3</option>
                <option value="LazerCopy_A3">LazerCopy_A3</option>
            </select></td>
        <td class="odd-cell" width="34%">Количество пачек3:</td>
        <td><input type="text" name="doc_pkg2" ></td>
        </tr>
	<tr>
        <td  class="even-cell">Менеджер:</td>
        <td><select name="manager">
                <option value=></option>
                <option><font color="#FF0000">__Офис-сервис__</font></option>
                <option value=Пилюгина(0938476683)>Пилюгина Е.</option>
                <option value=Околотенко(0504005663)>Околотенко И.</option>
                <option value=Рябикина(7626553)>Рябикина С.</option>
                <option value=Николенко(0979200481)>Николенко В.</option>
                <option value=Мыхно(7599034)>Мыхно В.</option>
                <option value=Бокша(7642649)>Бокша Е.</option>
                <option value=Максимович(7511815)>Максимович С.</option>
                <option value=Мирошникова(7573886)>Мирошникова О.</option>
                <option value=Свичкарь(7511812)>Свичкарь А.</option>
                <option value=Ларинская(0979915867)>Ларинская В.</option>
                <option value=Степаненко(0634369467)>Степаненько М.</option>
                <option value=Барская(0972349078)>Барская А.</option>
                <option value=Логвиненко(0509651175)>Логвиненко Е.</option>
                <option value=Хворост(0992622364)>Хворост Г.</option>
                <option value=Чернышова(0509131663)>Чернышова М.</option>
                <option value=Панкова(0678011587)>Панкова.З.И</option>
                <option value=Заднепровская(0935390791)>Заднепровская Е.В.</option>
                <option value=Краснова(0502509858)>Краснова Н.</option>
                <option value=Дорофеева(0677312051)>Дорофеева М.В.</option> 
                <option><font color="#FF0000">____Закупки____</font></option>
                <option value=Кузьменко(0663236314)>Кузьменко А.</option>
                <option value=Сапсай(0505557268)>Сапсай С.</option>
                <option value=Рогачева(80678033778)>Рогачева М.</option>
                <option value=Буклей(0661200747)>Буклей И.</option>
                <option><font color="#FF0000">___Маркетинг___</font></option>
                <option value=Сазонова(0664358162)>Сазонова И.</option>
                <option value=Гусак(0666370631)>Гусак Е.</option>
                <option value=Захарова(0668875571)>Захарова М.Г.</option>
                <option><font color="#FF0000">______ИТО______</font></option>
                <option value=Филин(0506834155)>Филин Я.М.</option>
                <option value=Грешнер(0506151283)>Грешнер А.Я.</option>
                </select>

        </td>
	</tr>
	<tr>
        <td  class="odd-cell">Дата поступления денег:</td>

        <td>
        <input type="text" name="d_mon" id="f_date_c" size="20"/>
<img src="img/img.gif" id="f_trigger_c" style="cursor: pointer; border: 0px solid red;" title="Date selector"/>&nbsp;
        </td>
	</tr>
	<tr>
        <td  class="even-cell">Номер счёта:</td>
        <td><input type="text" name="invnum" ></td>
	</tr>

	<tr>
        <td  class="odd-cell">Сумма:</td>
        <td><input type="text" name="sum" ></td>
	</tr>
<tr>
        <td  class="even-cell">Внести в маршрутный лист на дату:</td>

        <td>
        <input type="text" name="d_to" id="f_date_c1" value=<?=date('d.m.y', mktime()+86400);?> readonly="1" size="20"/>
<img src="img/img.gif" id="f_trigger_c1" style="cursor: pointer; border: 0px solid red;" title="Date selector"/>&nbsp;
        </td>
	</tr>


        </tr>

</table>

<p align="center">
<a href="javascript:submitform();" class="submit-link"><img src="img/set.gif" border="0"></a>
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
function submitform()
{
  document.myform.submit();
  return;
}
</script>
Распечатать за: <?= $print_arr ?>
