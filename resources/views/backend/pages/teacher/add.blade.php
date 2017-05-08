<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Thêm mới giáo viên</h4>
			</div>
			<div class="modal-body">
                    <div class="margin-bottom-50">
                        <form id="form-validation-simple" name="form-validation-simple" method="POST">
                            <div class="form-group">
                                <label class="form-label">Họ và tên</label>
                                <input name="validation-simple[username]" type="text" class="form-control" data-validation="[NOTEMPTY]">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input name="validation-simple[email]" type="text" class="form-control" data-validation="[EMAIL]">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input name="validation-simple[password]" type="password" class="form-control" data-validation="[NOTEMPTY]">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Dạy môn</label>
                                <select name="validation-simple[type]" class="form-control" data-validation="[NOTEMPTY]">
                                    <option value="">Select type</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Select2</label>
                                <select name="validation-simple[color]" class="form-control select2 select2-hidden-accessible" data-validation="[NOTEMPTY]" tabindex="-1" aria-hidden="true">
                                    <option value="">Select type</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 505px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-validation-simplecolor-x0-container"><span class="select2-selection__rendered" id="select2-validation-simplecolor-x0-container" title="Select type">Select type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary width-150">Validate</button>
                                <button type="button" class="btn btn-default" onclick="$('#form-validation-simple').removeError();">Clear</button>
                            </div>
                        </form>
                        <!-- End Under Element Form Validation -->
                    </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>