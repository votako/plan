<tr>
	<td ><!--&nbsp;&nbsp;<strong><?=$driver?></strong><br />-->
		<form method="post">
			<input type="hidden" name="action" value="update" />
			<input type="hidden" name="id_d2" value="<?=$id_d?>" />
			<input type="hidden" name="date_to" id="date_to" value="<?=$datem;?>" />
			<select name='driver_d'>
				<option value=<?=$driver?>><?=$driver?></option>
				<option value=></option>
				<option value=НеЕдет>Не едет</option>
				<option value=Волобуев>Волобуев В.Г.</option>
				<option value=Диханов>Диханов В.В.</option>
				<option value=Климов>Климов А.Б.</option>
				<option value=Пенцов>Пенцов С.А.</option>
			</select><br />
			<select name='driver_doc'>
				<option value=<?=$driver_doc?>><?=$driver_doc?></option>
				<option value=></option>
				<option value=доверенность>доверенность</option>
				<option value=печать>печать</option>
				<option value=получили>получили</option>
				<option value=отправили>отправили</option>
				<option value=ост_на_фил>ост_на_фил</option>
				<option value=подпись>подпись</option>
				<option value=купили>купили</option>
				<option value=довезли>довезли</option>
				<option value=отвезли>отвезли</option>
				<option value=расх+деньги>расх+деньги</option>
				<option value=расх+договор>расх+договор</option>
				<option value=НеЗабрали>не забрали</option>
			</select><br />
			<input type="text" name='driver_doc2' value="<?=$driver_doc2?>"/>
			<a href="javascript:document.forms[<?=$id+4?>].submit();" class="submit-link">Назначить</a>
		</form>
	</td>
	<td >&nbsp;&nbsp;<?=$id?><?=$del_id?></td>
	<td >&nbsp;&nbsp;<?=$podr?>&nbsp;&nbsp;</td>
	<td >&nbsp;&nbsp;<?=$to_firm?><br /><b>Дата&nbsp;<?=$datem?></b>&nbsp;&nbsp;</td>
	<td >&nbsp;&nbsp;<?=$to_time?>&nbsp;&nbsp;</td>
	<td >&nbsp;&nbsp;<?=$docs?>&nbsp;&nbsp;</td>
	<td >&nbsp;&nbsp;<?=$place_num?>&nbsp;&nbsp;</td>
	<td >&nbsp;&nbsp;<?=$address?>&nbsp;&nbsp;</td>
	<td >&nbsp;&nbsp;<?=$to_face?>&nbsp;&nbsp;</td>
	<td >&nbsp;&nbsp;<?=$todo?>&nbsp;&nbsp;</td>
	<!--<td >&nbsp;&nbsp;<?=$num_dec?>&nbsp;&nbsp;</td>-->
	<td >&nbsp;&nbsp;<?=$doc_num?>&nbsp;&nbsp;<br />&nbsp;&nbsp;<?=$doc_num1 ?>&nbsp;&nbsp;<br />&nbsp;&nbsp;<?=$doc_num2?>&nbsp;&nbsp;</td>
	<td >&nbsp;&nbsp;<?=$doc_pkg?>&nbsp;&nbsp;<br />&nbsp;&nbsp;<?=$doc_pkg1 ?>&nbsp;&nbsp;<br />&nbsp;&nbsp;<?=$doc_pkg2?>&nbsp;&nbsp;</td>
	<!--<td >&nbsp;&nbsp;<?=$doc_num1?>&nbsp;&nbsp;</td>-->
	<!--<td >&nbsp;&nbsp;<?=$doc_pkg1?>&nbsp;&nbsp;</td>-->
	<!--<td >&nbsp;&nbsp;<?=$doc_num2?>&nbsp;&nbsp;</td>-->
	<!--<td >&nbsp;&nbsp;<?=$doc_pkg2?>&nbsp;&nbsp;</td>-->
	<td >&nbsp;&nbsp;<?=$manager?>&nbsp;&nbsp;</td>
	<td >&nbsp;&nbsp;<?=$d_mon?>&nbsp;&nbsp;</td>
	<td >&nbsp;&nbsp;<?=$sum?>&nbsp;&nbsp;</td>
	<td >&nbsp;&nbsp;<?=$invnum?>&nbsp;&nbsp;</td>
</tr>
