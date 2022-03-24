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
					<table style="width:100%; border:0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="background:#eee;" width="100">Loại từ</td>
                            <td>
                                <div class="form-group">
                                    <select class="form-control" name="loaitu" style="width:50%;">
                                        <!-- BEGIN: loaitu -->
                                        <option value="{DATA.id}" {DATA.selected}>{DATA.tenloaitd}</option>
                                        <!-- END: loaitu -->
                                    </select>
                                </div>
                            </td>
                        </tr>
						<tr>
							<td style="background:#eee;" width="100">Tên từ</td>
							<td style="background:#eee;">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" style="width:50%;" value="{DATA.name}"/>
                                </div>
                            </td>
						</tr>
                        <tr>
							<td style="background:#eee;" width="100">Nghĩa của từ</td>
							<td style="background:#eee;">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="nghiatu" style="width:50%;" value=""/>
                                </div>
                            </td>
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
<script type="text/javascript">
	$("input[name=selectimg]").click(function()
	{
		var area = "pic_path"; // return value area
		var type = "image";
		var path = "{PATH}";
		nv_open_browse_file("{BROWSER}");
		return false;
	});
</script>
<!-- END: main -->
