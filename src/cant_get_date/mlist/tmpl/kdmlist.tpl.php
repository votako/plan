<input type="hidden" name="date1" value="<?= $date1 ?>">
<input type="hidden" name="date2" value="<?= $date2 ?>">
<input type="hidden" name="date_m1" value="<?= $date_m1 ?>">
<input type="hidden" name="date_m2" value="<?= $date_m2 ?>">

<script type="text/javascript" src="datepickercontrol/datepickercontrol.js"></script>
<link type="text/css" rel="stylesheet" href="datepickercontrol/datepickercontrol.css">
<input type="hidden" id="DPC_TODAY_TEXT" value="�������">
<input type="hidden" id="DPC_BUTTON_TITLE" value="������� ���������...">
<input type="hidden" id="DPC_MONTH_NAMES" value="['������', '�������', '����', '������', '���', '����', '����', '������', '��������', '�������', '������', '�������']">
<input type="hidden" id="DPC_DAY_NAMES" value="['��', '��', '��', '��', '��', '��', '��']">
<input type="hidden" id="DPC_WEEK_NUMBER" value="true">
<input type="hidden" id="DPC_FIRST_WEEK_DAY" value="1">


<!--<table align="center" cellspacing="1" cellpadding="2" border=1 bordercolor=000000>-->
<table width="100%" border="1" cellspacing="0" cellpadding="0" align="center" bordercolor="green">
<tr>
	<td colspan="14">
				�������� ���<br />���. �������<br />������������ ��������<br /><br />
				<strong>
					<font>
						���������� ���� ��: <?echo "$datem"; ?>
				    </font><br />
						��������: <?echo "$driver_ml"; ?>
		        </strong>
		    <form method="post" action="kdmlist.php">
				<input type="hidden" name="action" value="printdr" />
			  
				<select name="driver_d">
					<option value=></option>
					<option value=������>�� ����</option>
					<option value=��������>�������� �.�.</option>
					<option value=�������>������� �.�.</option>
					<option value=������>������ �.�.</option>
					<option value=������>������ �.�.</option>
			  	</select>

				<input type="text" name="date_to" id="date_to" value="<?=$datem;?>" datepicker="true" datepicker_format="DD.MM.YY">
			  	<!--<a href="javascript:submitformdr();" class="submit-link">�������������</a>-->
			  	<!--<a href="javascript:document.forms[<?=$id+1?>].submit();" class="submit-link">�������������</a>-->
			  	<input type="submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://topolyok.com.ua/all/blank/new/stat_driver.php" target="_blank">��������</a>
			    <a href="http://topolyok.com.ua/all/blank/new/stat_manager.php" target="_blank">���������</a>
		    </form>
		<table>
		    <tr>
			    <td>
					<form method="post" action="kdmlist.php">
					    <input type="hidden" name="action" value="add" />
					    <input type="hidden" name="date_to" value="<?=$datem;?>" />
					    <input type="hidden" name="date_drp" value="<?=$datem;?>" />
					    <input type="submit" value="�������� ������ ���" />
					</form>
			    </td>
			    
			    <td>
					<form method="post" action="kdmlist.php">
						<input type="hidden" name="action" value="addnk" />
						<input type="hidden" name="date_to" value="<?=$datem;?>" />
						<input type="hidden" name="date_nk" value="<?=$datem;?>" />
						<input type="submit" value="�������� ������ ��" />
				   	</form>
			    </td>
			    
			    <td>
				  	<form method="post" action="kdmlist.php">
						<input type="hidden" name="action" value="ofs" />
						<input type="hidden" name="date_to" value="<?=$datem;?>" />
						<input type="submit" value="������ ���" />
				  	</form>
			    </td>
			    
			    <td>
				  	<form method="post" action="kdmlist.php">
						<input type="hidden" name="action" value="search" />
						<input type="text" name="to_firm" value="�����?" />
						�����:<select name="month">
							<option value=></option>
							<option value=01>������</option>
							<option value=02>�������</option>
							<option value=03>����</option>
							<option value=04>������</option>
							<option value=05>���</option>
							<option value=06>����</option>
							<option value=07>����</option>
							<option value=08>������</option>
							<option value=09>��������</option>
							<option value=10>�������</option>
							<option value=11>������</option>
							<option value=12>�������</option>
						</select>
						���:<select name="year">
							<option value=></option>
							<option value=08>2008</option>
							<option value=09>2009</option>
							<option value=10>2010</option>
							<option value=11>2011</option>
						</select>
						<input type="submit" value="�����" />
				  	</form>
			    </td>
		    </tr>
		</table>
	</td>

</tr>
	<tr class="row">
	  	<td class="header-cell">&nbsp;&nbsp;&nbsp;<a href="<?= $sortorderd ?>">��������</a>&nbsp;&nbsp;&nbsp;<br />

	  	</td>
	  	<td class="header-cell">&nbsp;<span lang="ru">�</span><br /></td>
	  	<td class="header-cell">&nbsp;&nbsp;&nbsp;<a href="<?= $sortorder ?>">�����</a>&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;�����&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;�����&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;��� ������&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;��� �������&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;�����&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;����&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;��������&nbsp;&nbsp;&nbsp;<br /></td>
	    <!--<td class="header-cell">&nbsp;&nbsp;&nbsp;� ����������, ���-�� ����&nbsp;&nbsp;&nbsp;<br /></td>-->
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;����� ������&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;���-�� �����&nbsp;&nbsp;&nbsp;<br /></td>
	    <!--<td class="header-cell">&nbsp;&nbsp;&nbsp;����� ������2&nbsp;&nbsp;&nbsp;<br /></td>-->
	    <!--<td class="header-cell">&nbsp;&nbsp;&nbsp;���-�� �����2&nbsp;&nbsp;&nbsp;<br /></td>-->
	    <!--<td class="header-cell">&nbsp;&nbsp;&nbsp;����� ������3&nbsp;&nbsp;&nbsp;<br /></td>-->
	    <!--<td class="header-cell">&nbsp;&nbsp;&nbsp;���-�� �����3&nbsp;&nbsp;&nbsp;<br /></td>-->
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;��������&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;���&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;�����&nbsp;&nbsp;&nbsp;<br /></td>
	    <td class="header-cell">&nbsp;&nbsp;&nbsp;����� �����&nbsp;&nbsp;&nbsp;<br /></td>
	</tr>
  <?= $content ?>

</table>
