<!-- BEGIN: main -->
<form action="" method="post" >
    <div class="table-responsive">
        <table id="edit" class="table table-striped table-bordered table-hover">
            <tfoot>
                
            </tfoot>
            <tbody>
                <tr>
                    <td class="text-right text-nowrap"><strong>Loại từ: </strong> <sup class="required">(*)</sup></td>
                    <td>
                        <div class="form-group">
                            <select class="form-control" name="loaitu">
                                <!-- BEGIN: loaitu -->
                                <option value="{DATA.id}">{DATA.tenloaitd}</option>
                                <!-- END: loaitu -->
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-right text-nowrap"><strong>Từ cần tra: </strong> <sup class="required">(*)</sup></td>
                    <td><div class="form-group"><input class="form-control frm-item" name="tutra" id="tutra" type="text" value="" maxlength="250"  /></div></td>
                </tr>
                <tr>
                    <td></td>
                    <td class=""><input class="btn btn-primary frm-item" name="submit" type="submit" value="Tra từ" /></td>
                </tr>
                <tr>
                    <td class="text-right text-nowrap"><strong>Nghĩ của từ : </strong></td>
                    <td><textarea disabled class="frm-item form-control" id="nghiatu" name="nghiatu" rows="10"><!-- BEGIN: nghiatu -->{tu.nghiatu}<!-- END: nghiatu --></textarea></td>
                </tr>
            </tbody>
        </table>
    </div>
</form>
<!-- END: main -->