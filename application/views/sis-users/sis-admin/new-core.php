        <section class="section-container no-padding-top">
          <div class="container-fluid">
            <div class="row">

              <div class="col-xl-6 col-xs-12" style="margin: 0 auto">
                <!-- START panel-->
                <form action="<?php echo site_url('core/core_save_registration'); ?>" method="post" accept-charset="utf-8">
                  <div class="card mb-3" id="cardDemo7">
                    <div class="card-header"><span class="nav-icon"><em class="icon-notebook-streamline icon-lg"></em></span> New Core</div>
                    <div class="card-body">

                      <div class="form-group col-lg-12">
                        <label class="control-label"><span class="nav-icon"><em class="ion-ios-help-outline"></em></span> Fields with (<font style="color: red">*</font>) are required.</label>
                      </div>
                      <div class="form-group col-lg-12">
                        <label class="control-label"><font style="color: red">*</font> Core Code</label>
                        <input type="text" name="core_code[]" class="form-control" maxlength="60" required="">
                      </div>
                      <div class="form-group col-lg-12">
                        <label class="control-label"><font style="color: red">*</font> Description</label>
                        <textarea name="description[]" class="form-control" maxlength="100" required=""></textarea>
                      </div>
                      <div class="form-group col-lg-12">
                        <label class="control-label"><font style="color: red">*</font> Vocational Program</label>
                        <select name="voc_program[]" class="form-control" required="">
                          <?php if(!empty($course)): ?>
                            <?php foreach ($course as $value): ?>
                              <option value="<?php echo $value['voc_program_acronym']; ?>"><?php echo $value['voc_program'].' - '.$value['voc_program_acronym']; ?></option>
                            <?php endforeach; ?>
                          <?php endif; ?>
                        </select>
                      </div><br>

                      <div id="TextBoxesGroup"></div>
                      
                    </div>
                    <div class="card-footer">
                      <div class="form-group col-lg-12">
                        <div class="btn-group">
                          <button id="addButton" type="button" class="btn btn-success">&nbsp&nbsp&nbsp<span class="nav-icon"><em class="ion-ios-plus-outline"></em></span> Add&nbsp&nbsp&nbsp</button>
                          <button id="removeButton" type="button" class="btn btn-danger"><span class="nav-icon"><em class="ion-ios-minus-outline"></em></span> Remove</button>  
                        </div>
                        <div class="float-right">
                          <button class="btn btn-info" type="submit"><span class="nav-icon"></span><em class="ion-ios-checkmark-outline"></em> Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- END Card-->
              </div>

            </div>
          </div>
        </section>

<script type="text/javascript">
  
$(document).ready(function(){
  var counter = 1;
  $("#addButton").click(function () {
    if(counter>10){
        alert("Only 10 forms are allowed");
        return false;
    }
        
    var new_core = $(document.createElement('div')).attr("id", 'new_core' + counter);
    new_core.after().html(

      '<hr/><br>'+
      '<div class="form-group col-lg-12">'+
        '<label class="control-label"><font style="color: red">*</font> Core Code</label>'+
        '<input type="text" name="core_code[]" class="form-control" maxlength="60" required="">'+
      '</div>'+
      '<div class="form-group col-lg-12">'+
        '<label class="control-label"><font style="color: red">*</font> Description</label>'+
        '<textarea name="description[]" class="form-control" maxlength="100" required=""></textarea>'+
      '</div>'+
      '<div class="form-group col-lg-12">'+
        '<label class="control-label"><font style="color: red">*</font> Vocational Program</label>'+
        '<select name="voc_program[]" class="form-control" required="">'+
          '<?php if(!empty($course)): ?>'+
            '<?php foreach ($course as $value): ?>'+
              '<option value="<?php echo $value['voc_program_acronym']; ?>"><?php echo $value['voc_program'].' - '.$value['voc_program_acronym']; ?></option>'+
            '<?php endforeach; ?>'+
          '<?php endif; ?>'+
        '</select>'+
      '</div><br>'

    );

    new_core.appendTo("#TextBoxesGroup");
    counter++;
  });

  $("#removeButton").click(function (){
    if(counter==1){
      alert("No more forms to remove");
      return false;
    }
    counter--;
    $("#new_core" + counter).remove();
  });

});

</script>