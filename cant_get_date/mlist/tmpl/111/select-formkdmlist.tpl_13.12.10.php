
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
                <p align="center"  ><b>��������: </b><br></td>
	</tr>
		<tr>
	<td class="even-cell">�������������:</td>
        <td ><!--<input type="text" name="podr" >-->
<select name="podr">
<option value=����-������>����-������</option>
<option value=���-��(7313179)>���-��</option>
<option value=�������>�������</option>
<option value=���>���</option>
<option value=������2(7143568)>������2</option>
<option value=������4(7327410)>������4</option>
<option value=������5(7176177)>������5</option>
<option value=������6(7730080)>������6</option>
<option value=������7(7161617)>������7</option>
<option value=������8(7004886)>������8</option>
<option value=������9(7162274)>������9</option>
<option value=������10(7510101)>������10</option>
<option value=AXO>AXO</option>
<option value=���>���</option>
<option value=�����������>�����������</option>
<option value=��������>��������</option>
<option value=���>���</option>
</select>
        
        
        </td>
	</tr>
	<tr>
        <td  class="odd-cell">������/���������:</td>
        <td><input type="text" name="to_firm" ></td>
	</tr>
	<tr>
        <td  class="even-cell">�����. ����� ������ (�, ��, �������). �������� ����� ��������:
        
        
        </td>
        <td><input type="text" name="to_time" ></td>
	</tr>
        <tr>
        <td class="odd-cell" width="34%">������ ���������:</td>
        <td><input type="text" name="docs" ></td>
        <tr>
	<td class="even-cell">������� ���������:</td>
	<td ><input type="text" name="place_num" ></td>
	</tr>        
        <tr>    
	<td class="odd-cell">�����:</td>
	<td ><input type="text" name="address" ></td>
	</tr>
	<tr>
        <td  class="even-cell">���� + ���������� �������:</td>
        <td><input type="text" name="to_face" ></td>
	</tr>
	<tr>
        <td  class="odd-cell">��������:</td>
        <td><input type="text" name="todo" ></td>
	</tr>
    <tr>
        <td  class="even-cell">� ����������, ���-�� ����</td>
        <td><input type="text" name="num_dec" ></td>
	</tr>
        <tr>
        <td class="odd-cell" width="34%">����� ������1:</td>
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
        <td class="odd-cell" width="34%">���������� �����1:</td>
        <td><input type="text" name="doc_pkg" ></td>
        </tr>
        <tr>
        <td class="odd-cell" width="34%">����� ������2:</td>
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
        <td class="odd-cell" width="34%">���������� �����2:</td>
        <td><input type="text" name="doc_pkg1" ></td>
        </tr>
        <tr>
        <td class="odd-cell" width="34%">����� ������3:</td>
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
        <td class="odd-cell" width="34%">���������� �����3:</td>
        <td><input type="text" name="doc_pkg2" ></td>
        </tr>
	<tr>
        <td  class="even-cell">��������:</td>
        <td><select name="manager">
                <option value=></option>
                <option><font color="#FF0000">__����-������__</font></option>
                <option value=��������(0938476683)>�������� �.</option>
                <option value=����������(0504005663)>���������� �.</option>
                <option value=��������(7626553)>�������� �.</option>
                <option value=���������(0979200481)>��������� �.</option>
                <option value=�����(7599034)>����� �.</option>
                <option value=�����(7642649)>����� �.</option>
                <option value=����������(7511815)>���������� �.</option>
                <option value=�����������(7573886)>����������� �.</option>
                <option value=��������(7511812)>�������� �.</option>
                <option value=���������(0979915867)>��������� �.</option>
                <option value=����������(0634369467)>����������� �.</option>
                <option value=�������(0972349078)>������� �.</option>
                <option value=����������(0509651175)>���������� �.</option>
                <option value=�������(0992622364)>������� �.</option>
                <option value=���������(0509131663)>��������� �.</option>
                <option value=�������(0678011587)>�������.�.�</option>
                <option value=�������������(0935390791)>������������� �.�.</option>
                <option value=��������(0502509858)>�������� �.</option>
                <option value=���������(0677312051)>��������� �.�.</option> 
                <option><font color="#FF0000">____�������____</font></option>
                <option value=���������(0663236314)>��������� �.</option>
                <option value=������(0505557268)>������ �.</option>
                <option value=��������(80678033778)>�������� �.</option>
                <option value=������(0661200747)>������ �.</option>
                <option><font color="#FF0000">___���������___</font></option>
                <option value=��������(0664358162)>�������� �.</option>
                <option value=�����(0666370631)>����� �.</option>
                <option value=��������(0668875571)>�������� �.�.</option>
                <option><font color="#FF0000">______���______</font></option>
                <option value=�����(0506834155)>����� �.�.</option>
                <option value=�������(0506151283)>������� �.�.</option>
                </select>

        </td>
	</tr>
	<tr>
        <td  class="odd-cell">���� ����������� �����:</td>

        <td>
        <input type="text" name="d_mon" id="f_date_c" size="20"/>
<img src="img/img.gif" id="f_trigger_c" style="cursor: pointer; border: 0px solid red;" title="Date selector"/>&nbsp;
        </td>
	</tr>
	<tr>
        <td  class="even-cell">����� �����:</td>
        <td><input type="text" name="invnum" ></td>
	</tr>

	<tr>
        <td  class="odd-cell">�����:</td>
        <td><input type="text" name="sum" ></td>
	</tr>
<tr>
        <td  class="even-cell">������ � ���������� ���� �� ����:</td>

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
����������� ��: <?= $print_arr ?>
