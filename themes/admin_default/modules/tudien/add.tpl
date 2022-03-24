<!-- BEGIN: main -->
<script src="{NV_BASE_SITEURL}/themes/admin_default/js/album.js"></script>
<!-- BEGIN: mess -->
<div class="alert alert-info">{mess.mess}</div>
<!-- END: mess -->
<!-- BEGIN: err -->
<div class="quote" style="width:780px;">
	<blockquote class="error">
		<span>{ERR}</span>
	</blockquote>
</div>
<div class="clear">
</div>
<br/>
<!-- END: err -->
<table class="tab1 table">
	<thead>
		<tr>
			<td colspan="2">{LANG.add}</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="background:#eee;">
				<form id="formAdd" name="formAdd" method="post" action="">
				<table style="width:100%; border:0; margin-top: 10px" cellpadding="0" cellspacing="0">
						<tr>
							<td style="background:#eee;" width="100">Id</td>
							<td style="background:#eee;"><input type="text" name="id" class="form-control" id="id" style="width:50%;" value=""/></td>
						</tr>
					</table>
					<table style="width:100%; border:0; margin-top: 10px" cellpadding="0" cellspacing="0">
						<tr>
							<td style="background:#eee;" width="100">Tên loại từ</td>
							<td style="background:#eee;"><input type="text" name="name" class="form-control" id="name" style="width:50%;" value=""/></td>
						</tr>
					</table>
					<table style="width:100%; border:0; margin-top: 10px" cellpadding="0" cellspacing="0">
						<tr>
							<td style="background:#eee;" width="100">Tên viết tắt</td>
							<td style="background:#eee;"><input type="text" name="tenviettat" class="form-control" id="tenviettat" style="width:50%;" value=""/></td>
						</tr>
					</table>
					<table style="width:100%; border:0; margin-top: 10px" cellpadding="0" cellspacing="0">
						<tr align="center">
							<td style="background:#eee;">
								<input type="submit" class="btn btn-primary" name="add_new" id="add_new" value="Thêm" />
							</td>
						</tr>
					</table>
				</form>
			</td>
		</tr>
	</tbody>
</table>
<form method="post" action="">
<table style="width: 50%;" class="tab1 table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<td width="20px"></td>
			<td width="63px">STT</td>
			<td>Tên loaị từ</td>
            <td width="100px" align="center">Chức năng</td>
		</tr>
	</thead>
	
	<tbody{class}>
	<!-- BEGIN: row -->
		<tr>
			<td align="center"><input type='checkbox' class='filelist form-control'
				value="{row.id}"></td>
			<td>{row.stt}</td>
			<td>{row.tenloaitd}</td>
			</td>
			<td width="200px"  align="center">
				<span  class="edit_icon">
					<button class="btn btn-primary" type="submit" name="sua" value="{row.id}">Sửa</button>
				</span>&nbsp;-&nbsp; <span
				class="delete_icon">
				<button class="btn btn-danger" name="xoa" type="submit" value="{row.id}">Xóa</button>
			</span>
			</td>
		</tr>
	<!-- END: row -->	
	</tbody>
	
</table>
</form>
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
