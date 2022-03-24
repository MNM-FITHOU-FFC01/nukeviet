<!-- BEGIN: main -->
<form action="" method="post">
<table class="tab1 table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<td width="20px"><input type='checkbox' id="checkall" name="checkall" class='filelist form-control'
				value="{row.id}"></td>
			<td width="63px">STT</td>
			<td>Tên từ</td>
			<td>Nghĩa từ</td>
			<td>Loại từ</td>
            <td width="100px" align="center">Chức năng</td>
		</tr>
	</thead>
	
	<tbody{class}>
	<!-- BEGIN: row -->
		<tr>
			<td align="center"><input type='checkbox' name="del[]" class='filelist form-control'
				value="{row.id}"></td>
			<td>{row.stt}</td>
			<td>{row.tentu}</td>
			<td>{row.nghiatu}</td>
			<td>{row.tenloaitd}</a>
			</td>
			<td width="200px"  align="center"><span class="edit_icon"><a class='editfile btn btn-primary btn-xs'
				href="{URL_EDIT}">Sửa</a></span>&nbsp;-&nbsp; <span
				class="delete_icon"><a class='delfile btn btn-danger btn-xs' href="{URL_DEL_ONE}">Xóa</a></span>
			</td>
		</tr>
	<!-- END: row -->	
	</tbody>
	
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
	<button class='btn btn-primary'>Xóa</button>
</form>
<script type='text/javascript'>
	$(function()
	{
		$('#checkall').click(function()
		{
				$(this).attr('checked', 'checked');
		});
		$("")
	});
</script>
<!-- END: main -->
