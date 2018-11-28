    <!-- Edit Craft Modal-->
    <div  id="editCraft" class="modal fade demo-modal-form">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="mt-0 modal-title">Form modal</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form id="formeditCraft">
              <input type="hidden" name="craft_item_id" class="form-control" required="">
              <div class="form-group col-lg-12">
                <input class="form-control" name="user_id" type="hidden">
                <div class="control-label" ><font style="color: red">*</font> Craft Code</div>
                <input class="form-control" name="craft_code" maxlength="60" type="text">
              </div>
              <div class="form-group col-lg-12">
                <label class="control-label"><font style="color: red">*</font> Description</label>
                <textarea name="description" class="form-control" maxlength="100"></textarea>
              </div>
              <div class="form-group col-lg-12">
                <label class="control-label"><font style="color: red">*</font> Vocational Program</label>
                <select name="voc_program" class="form-control" required="">
                  <?php if(!empty($course)): ?>
                    <?php foreach ($course as $value): ?>
                      <option value="<?php echo $value['voc_program_acronym']; ?>"><?php echo $value['voc_program'].' - '.$value['voc_program_acronym']; ?></option>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer col-lg-12">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-info" type="button"  onclick="save_craft()">Save changes</button>
          </div>
        </div>
      </div>
    </div>
