<!-- BEGIN: main -->
<table class="tab1 table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<td width="20px"></td>
			<td width="63px">STT</td>
			<td>Tên từ</td>
			<td>Nghĩa từ</td>
			<td>Loại từ</td>
            <td width="100px" align="center">Chức năng</td>
		</tr>
	</thead>
	<!-- BEGIN: row -->
	<tbody{class}>
		<tr>
			<td align="center"><input type='checkbox' class='filelist form-control'
				value="{id}"></td>
			<td><!-- BEGIN: sel --> <select class="sel_w form-control" style="width: 60px;"
				id="{SEL_W}">
				<!-- BEGIN: sel_op -->
				<option {SELECT} value="{VAL}">{VAL}</option>
				<!-- END: sel_op -->
			</select> <!-- END: sel --></td>
			<td><a href="{LINK_ALBUM}">{name}</a></td>
			<td width="50px" align="center"><a href="{URL_ACTIVE}" class="active label label-success">{active}</a>
			</td>
			<td width="200px"  align="center"><span class="edit_icon"><a class='editfile btn btn-primary btn-xs'
				href="{URL_EDIT}">{LANG.edit}</a></span>&nbsp;-&nbsp; <span
				class="delete_icon"><a class='delfile btn btn-danger btn-xs' href="{URL_DEL_ONE}">{LANG.album_delete}</a></span>
			</td>
		</tr>
	</tbody>
	<!-- END: row -->
</table>
<table class="tab1">
	<tfoot>
		<tr>
			<td><span><a href='javascript:void(0);' id='checkall'>{LANG.album_checkall}</a>&nbsp;&nbsp;<a
				href='javascript:void(0);' id='uncheckall'>{LANG.album_uncheckall}</a>&nbsp;&nbsp;</span>
			<span class="add_icon"><a class='addfile' href="{LINK_ADD}">{LANG.album_add}</a>&nbsp;&nbsp;</span>
			<span class="delete_icon"><a id='delfilelist'
				href="javascript:void(0);">{LANG.album_delete}</a></span></td>
		</tr>
	</tfoot>
</table>

<!-- END: main -->
