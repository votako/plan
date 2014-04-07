<br>
<form method=post action=reloadip.php>
<table border="0"  cellpadding=0 cellspacing=0 width="45%" align=center id="table1">
	<tr>
		<td colspan="2">
                <p align="center"  ><b>System settings: </b><br></td>
	</tr>
		<tr>
	<td class="even-cell">Host Name:</td>
	<td ><input type="text" name="hostname" value='<?= $hostname ?>'></td>
	</tr>
	<tr>
        <td  class="odd-cell">IP Address:</td>
        <td  ><input type="text" name="ip1" value='<?= $ip1 ?>'></td>
	</tr>
	<tr>
        <td  class="even-cell">Subnet Mask:</td>
        <td  >
<input type="text" name="ip2" value='<?= $ip2 ?>'></td>
	</tr>
        <tr>
        <td class="odd-cell" width="34%">Default Gateway:
                </td>
        <td ><input type="text" name="defr" value='<?= $defr ?>'></td>
	</tr>

</table>

<p align="center">
<a href="javascript:document.forms[0].submit();" class="submit-link"><img src="/img/set.gif" border="0"></a>
</form>
</p>


<form method=post name=scnames action=sc.php>
<input type=hidden name=sc_names value="on">
<table border="0"  cellpadding=0 cellspacing=0 width="45%" align=center id="table2">
	<tr>
		<td colspan="2">
                <p align="center"  ><b></b><br></td>
	</tr>
		<tr>
	<td class="even-cell">Customer Name:</td>
	<td ><input type="text" name="cname" value='<?= $cname ?>'></td>
	</tr>
	<tr>
        <td  class="odd-cell" width="34%">System Name:</td>
        <td  ><input type="text" name="sname" value='<?= $sname ?>'></td>
	</tr>

</table>

<p align="center">
<a href="javascript:document.forms.scnames.submit();" class="submit-link"><img src="/img/set.gif" border="0"></a>
</form>
</p>




