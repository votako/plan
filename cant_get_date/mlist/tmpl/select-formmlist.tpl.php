<script language="JavaScript" src="lib/overlib_mini.js" type="text/javascript"></script>

<!-- main calendar program -->
  <script type="text/javascript" src="calendar/calendar.js"></script>
  <!-- language for the calendar -->
  <script type="text/javascript" src="calendar/lang/calendar-ru_win_.js"></script>
  <!-- the following script defines the Calendar.setup helper function, which makes adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript" src="calendar/calendar-setup.js"></script>

<center>
<form method=post action=mlistpwd.php>
<!-- <input type="hidden" name="action" value="addpts"> -->
<!-- <input type="submit" name="ПромТехСнаб" value="ПромТехСнаб"> -->
<!-- <input type="text" name="d_to" id="f_date_c2" value=<?=date('d.m.y', mktime()+86400);?> readonly="1" size="20"/> -->
<img src="img/img.gif" id="f_trigger_c2" style="cursor: pointer; border: 0px solid red;" title="Календарь"/>
</form>
</center>
<form method=post action=mlistpwd.php>
<input type="hidden" name="action" value="add">
<table border="0"  cellpadding=0 cellspacing=0 width="45%" align=center id="table1">
	<tr>
		<td colspan="2">
                <p align="center"  ><b>Добавить: </b><br></td>
	</tr>
		<tr>
	<td class="even-cell">Отдел:</td>
        <td ><!--<input type="text" name="podr" >-->
<select name="podr">
<option value=ОФС>Офис-Сервис</option>
<option value=ИМ>ИМ</option>
<option value=ОФС-уд(7313179)>ОФС-уд</option>
<option value=Закуп>Закупки</option>
<option value=СНА>СНА</option>
<option value="Фил2:<br/>7143568">Филиал2</option>
<option value="Фил4:<br/>7327410">Филиал4</option>
<option value="Фил5:<br/>7176177">Филиал5</option>
<option value="Фил6:<br/>7730080">Филиал6</option>
<option value="Фил7:<br/>7161617">Филиал7</option>
<option value="Фил8:<br/>7004886">Филиал8</option>
<option value="Фил9:<br/>7162274">Филиал9</option>
<option value="Фил10:<br/>7510101">Филиал10</option>
<option value=AXO>AXO</option>
<option value=ДРП>ДРП</option>
<option value=ИТО>ИТО</option>
<option value=Марк>Маркетологи</option>
<option value=Олимп>Олимп</option>
<option value=К_Дир>К_Дир</option>
<option value=Шкляев>Шкляев</option>
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
        <td class="odd-cell" width="34%">Марка бумаги1:</td>
        <td><select name="doc_num" >
                <option value=""></option>
                <option value="Maestro_A4">Maestro_A4</option>
                <option value="KymLuxBusinessA4">KymLuxBusinessA4</option>
                <option value="KymLuxClassicA4">KymLuxClassicA4</option>
                <option value="Xerox_A4">Xerox_A4</option>
                <option value="LazerCopy_A4">LazerCopy_A4</option>
                <option value="IQpremiumA4">IQpremiumA4</option>
                <option value="IQA4">IQA4</option>
		<option value="Maestro_A3">Maestro_A3</option>
                <option value="SvetoCopy_A3">SvetoCopy_A3</option>
                <option value="KymLux_A3">KymLux_A3</option>
                <option value="Xerox_A3">Xerox_A3</option>
                <option value="LazerCopy_A3">LazerCopy_A3</option>
                <option value="А4_Uni_Premium">А4_Uni_Premium</option>
            </select></td>
        <td class="odd-cell" width="34%">Количество пачек1:</td>
        <td><input type="text" name="doc_pkg" ></td>
        </tr>
        <tr>
        <td class="odd-cell" width="34%">Марка бумаги2:</td>
        <td><select name="doc_num1" >
                <option value=""></option>
                <option value="Maestro_A4">Maestro_A4</option>
                <option value="KymLuxBusinessA4">KymLuxBusinessA4</option>
                <option value="KymLuxClassicA4">KymLuxClassicA4</option>
                <option value="Xerox_A4">Xerox_A4</option>
                <option value="LazerCopy_A4">LazerCopy_A4</option>
                <option value="IQpremiumA4">IQpremiumA4</option>
			<option value="IQA4">IQA4</option>
                <option value="Maestro_A3">Maestro_A3</option>
                <option value="SvetoCopy_A3">SvetoCopy_A3</option>
                <option value="KymLux_A3">KymLux_A3</option>
                <option value="Xerox_A3">Xerox_A3</option>
                <option value="LazerCopy_A3">LazerCopy_A3</option>
                <option value="А4_Uni_Premium">А4_Uni_Premium</option>
            </select></td>
        <td class="odd-cell" width="34%">Количество пачек2:</td>
        <td><input type="text" name="doc_pkg1" ></td>
        </tr>
        <tr>
        <td class="odd-cell" width="34%">Марка бумаги3:</td>
        <td><select name="doc_num2" >
                <option value=""></option>
                <option value="Maestro_A4">Maestro_A4</option>
                <option value="KymLuxBusinessA4">KymLuxBusinessA4</option>
                <option value="KymLuxClassicA4">KymLuxClassicA4</option>
                <option value="Xerox_A4">Xerox_A4</option>
                <option value="LazerCopy_A4">LazerCopy_A4</option>
                <option value="IQpremiumA4">IQpremiumA4</option>
                <option value="IQA4">IQA4</option>
<option value="Maestro_A3">Maestro_A3</option>
                <option value="SvetoCopy_A3">SvetoCopy_A3</option>
                <option value="KymLux_A3">KymLux_A3</option>
                <option value="Xerox_A3">Xerox_A3</option>
                <option value="LazerCopy_A3">LazerCopy_A3</option>
                <option value="А4_Uni_Premium">А4_Uni_Premium</option>
            </select></td>
        <td class="odd-cell" width="34%">Количество пачек3:</td>
        <td><input type="text" name="doc_pkg2" ></td>
        </tr>
<tr>
<td  class="even-cell">Менеджер:</td>
<td><select name="manager">
<option value=></option>
	<option><font color="#FF0000">__Офис-сервис__</font></option>
		<option value="Есик:<br/>099-00-521-02">Есик В.А.</option>
		<option value="Пахомова:<br/>0506785143">Пахомова А.А.</option>
<!-- 		<option value="Товкань:<br/>0501862193">Товкань П.Н.</option> -->
		<option value="Дорофеева:0993410111">Дорофеева М.В.</option>
		<option value="Рябикина:<br/>0660510852">Рябикина С.С.</option>
<!-- 		<option value="Нежальская:<br/>0936107131">Нежальская Л.В.</option> -->
<!-- 		<option value="Мовчан:<br/>0999805422">Мовчан Е.А.</option> -->
		<option value="Манушина:0507490227">Манушина М.Г.</option>
<!-- 		<option value="Мыхно:0660107471">Мыхно В.А.</option> -->
		<option value="Бокша:0667731333">Бокша Е.Е.</option>
		<option value="Максимович:0952563814">Максимович С.А.</option>
		<option value="Мирошникова:0506835361">Мирошникова О.А.</option>
		<option value="Ларинская:<br/>0979915867">Ларинская В.В.</option>
		<option value="Панкова:0508501745">Панкова З.И.</option>
<!-- 		<option value="Болтинова:<br/>0954068837">Болтинова Н.В.</option> -->
		<option value="Еськова:<br/>0958842521">Еськова Л.О.</option>
		<option value="Краснова:<br/>0502509858">Краснова Н.Г.</option>
		<option value="Довгаль:0509136561">Довгаль Ю.В.</option>
<!-- 		<option value="Ладык:<br/>0663318705">Ладык М.И.</option> -->
<!-- 		<option value="Лозинская:<br/>0937271496">Лозинская Т.Ю.</option> -->
		<option value="Яковенко:<br/>066-251-22-89">Яковенко А.А.</option>
		
	<option><font color="#FF0000">____ИМ____</font></option>
	
		<option value="Фоменко:0667125335">Фоменко О.Ю.</option>
		
	<option><font color="#FF0000">____Закупки____</font></option>
	
		<option value="Якушева:<br/>0637369505">Якушева И.А.</option>
		<option value="Корягина:<br/>0936445431">Корягина А.И.</option>
<!-- 		<option value="Колесниченко:<br/>0938476683">Колесниченко Е.В.</option> -->
		<option value="Якушева:<br/>0938476683">Якушева Е.В.</option>
		<option value="Рогачева:<br/>0678033778">Рогачева М.</option>
		<option value="Степаненко:<br/>0993721262">Степаненко Д.А.</option>
	
	<option><font color="#FF0000">___Маркетинг___</font></option>
		<option value="Тихонова:<br/>0508312161"> Тихонова А.В.</option>
		<option value="Калинина:<br/>0937227580">Калинина С.П.</option>
		<option value="Резванова:<br/>0632186194">Резванова А.П.</option>
		<option value="Коверга:<br/>0663641358">Коверга А.</option>
		<option value="Голосова:<br/>0990885501">Голосова А.</option>
		<option value="Костина:<br/>0953809999">Костина</option>
	
	<option><font color="#FF0000">______ИТО______</font></option>
	
		<option value="Окатов:<br/>0950301937">Окатов И.Г.</option>
		<option value="Грешнер:<br/>0506151283">Грешнер А.Я.</option>
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
<a href="javascript:document.forms[1].submit();" class="submit-link"><img src="img/set.gif" border="0"></a>
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
    Calendar.setup({
        inputField     :    "f_date_c2",     // id of the input field
        ifFormat       :    "%d.%m.%y",      // format of the input field
        button         :    "f_trigger_c2",  // trigger for the calendar (button ID)
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
