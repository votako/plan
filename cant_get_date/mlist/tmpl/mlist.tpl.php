<input type="hidden" name="date1" value="<?= $date1 ?>">
<input type="hidden" name="date2" value="<?= $date2 ?>">
<input type="hidden" name="date_m1" value="<?= $date_m1 ?>">
<input type="hidden" name="date_m2" value="<?= $date_m2 ?>">

<!--<table align="center" cellspacing="1" cellpadding="2" border=1 bordercolor=000000>-->

<table width="100%" border="1" cellspacing="0" cellpadding="0" align="center" bordercolor="green">
<tr><td colspan="14">
�������� ���<br />���. �������<br />������������ ��������<br /><br />
<form method="post" action="mlistpwd.php">
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
  <tr class="row">
  <td class="header-cell">&nbsp;&nbsp;&nbsp;��������&nbsp;&nbsp;&nbsp;</td>
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
    <td class="header-cell">&nbsp;&nbsp;&nbsp;� �����&nbsp;&nbsp;&nbsp;<br /></td>
  </tr>
  <?= $content ?>

</table>
</form>
