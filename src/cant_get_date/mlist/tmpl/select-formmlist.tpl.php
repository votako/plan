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
<!-- <input type="submit" name="�����������" value="�����������"> -->
<!-- <input type="text" name="d_to" id="f_date_c2" value=<?=date('d.m.y', mktime()+86400);?> readonly="1" size="20"/> -->
<img src="img/img.gif" id="f_trigger_c2" style="cursor: pointer; border: 0px solid red;" title="���������"/>
</form>
</center>
<form method=post action=mlistpwd.php>
<input type="hidden" name="action" value="add">
<table border="0"  cellpadding=0 cellspacing=0 width="45%" align=center id="table1">
	<tr>
		<td colspan="2">
                <p align="center"  ><b>��������: </b><br></td>
	</tr>
		<tr>
	<td class="even-cell">�����:</td>
        <td ><!--<input type="text" name="podr" >-->
<select name="podr">
<option value=���>����-������</option>
<option value=��>��</option>
<option value=���-��(7313179)>���-��</option>
<option value=�����>�������</option>
<option value=���>���</option>
<option value="���2:<br/>7143568">������2</option>
<option value="���4:<br/>7327410">������4</option>
<option value="���5:<br/>7176177">������5</option>
<option value="���6:<br/>7730080">������6</option>
<option value="���7:<br/>7161617">������7</option>
<option value="���8:<br/>7004886">������8</option>
<option value="���9:<br/>7162274">������9</option>
<option value="���10:<br/>7510101">������10</option>
<option value=AXO>AXO</option>
<option value=���>���</option>
<option value=���>���</option>
<option value=����>�����������</option>
<option value=�����>�����</option>
<option value=�_���>�_���</option>
<option value=������>������</option>
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
        <td class="odd-cell" width="34%">����� ������1:</td>
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
                <option value="�4_Uni_Premium">�4_Uni_Premium</option>
            </select></td>
        <td class="odd-cell" width="34%">���������� �����1:</td>
        <td><input type="text" name="doc_pkg" ></td>
        </tr>
        <tr>
        <td class="odd-cell" width="34%">����� ������2:</td>
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
                <option value="�4_Uni_Premium">�4_Uni_Premium</option>
            </select></td>
        <td class="odd-cell" width="34%">���������� �����2:</td>
        <td><input type="text" name="doc_pkg1" ></td>
        </tr>
        <tr>
        <td class="odd-cell" width="34%">����� ������3:</td>
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
                <option value="�4_Uni_Premium">�4_Uni_Premium</option>
            </select></td>
        <td class="odd-cell" width="34%">���������� �����3:</td>
        <td><input type="text" name="doc_pkg2" ></td>
        </tr>
<tr>
<td  class="even-cell">��������:</td>
<td><select name="manager">
<option value=></option>
	<option><font color="#FF0000">__����-������__</font></option>
		<option value="����:<br/>099-00-521-02">���� �.�.</option>
		<option value="��������:<br/>0506785143">�������� �.�.</option>
<!-- 		<option value="�������:<br/>0501862193">������� �.�.</option> -->
		<option value="���������:0993410111">��������� �.�.</option>
		<option value="��������:<br/>0660510852">�������� �.�.</option>
<!-- 		<option value="����������:<br/>0936107131">���������� �.�.</option> -->
<!-- 		<option value="������:<br/>0999805422">������ �.�.</option> -->
		<option value="��������:0507490227">�������� �.�.</option>
<!-- 		<option value="�����:0660107471">����� �.�.</option> -->
		<option value="�����:0667731333">����� �.�.</option>
		<option value="����������:0952563814">���������� �.�.</option>
		<option value="�����������:0506835361">����������� �.�.</option>
		<option value="���������:<br/>0979915867">��������� �.�.</option>
		<option value="�������:0508501745">������� �.�.</option>
<!-- 		<option value="���������:<br/>0954068837">��������� �.�.</option> -->
		<option value="�������:<br/>0958842521">������� �.�.</option>
		<option value="��������:<br/>0502509858">�������� �.�.</option>
		<option value="�������:0509136561">������� �.�.</option>
<!-- 		<option value="�����:<br/>0663318705">����� �.�.</option> -->
<!-- 		<option value="���������:<br/>0937271496">��������� �.�.</option> -->
		<option value="��������:<br/>066-251-22-89">�������� �.�.</option>
		
	<option><font color="#FF0000">____��____</font></option>
	
		<option value="�������:0667125335">������� �.�.</option>
		
	<option><font color="#FF0000">____�������____</font></option>
	
		<option value="�������:<br/>0637369505">������� �.�.</option>
		<option value="��������:<br/>0936445431">�������� �.�.</option>
<!-- 		<option value="������������:<br/>0938476683">������������ �.�.</option> -->
		<option value="�������:<br/>0938476683">������� �.�.</option>
		<option value="��������:<br/>0678033778">�������� �.</option>
		<option value="����������:<br/>0993721262">���������� �.�.</option>
	
	<option><font color="#FF0000">___���������___</font></option>
		<option value="��������:<br/>0508312161"> �������� �.�.</option>
		<option value="��������:<br/>0937227580">�������� �.�.</option>
		<option value="���������:<br/>0632186194">��������� �.�.</option>
		<option value="�������:<br/>0663641358">������� �.</option>
		<option value="��������:<br/>0990885501">�������� �.</option>
		<option value="�������:<br/>0953809999">�������</option>
	
	<option><font color="#FF0000">______���______</font></option>
	
		<option value="������:<br/>0950301937">������ �.�.</option>
		<option value="�������:<br/>0506151283">������� �.�.</option>
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
����������� ��: <?= $print_arr ?>
