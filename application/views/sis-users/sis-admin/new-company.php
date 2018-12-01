        <section class="section-container no-padding-top">
          <div class="container-fluid">
            <div class="row">

              <div class="col-xl-6 col-xs-12" style="margin: 0 auto">
                <!-- START panel-->
                <form action="<?php echo site_url('company/company_save_registration'); ?>" method="post" accept-charset="utf-8">
                  <div class="card mb-3" id="cardDemo7">
                    <div class="card-header"><span class="nav-icon"><em class="icon-notebook-streamline icon-lg"></em></span> New Company</div>
                    <div class="card-body">

                      <div class="form-group col-lg-12">
                        <label class="control-label"><span class="nav-icon"><em class="ion-ios-help-outline"></em></span> Fields with (<font style="color: red">*</font>) are required.</label>
                      </div>
                      <div class="form-group col-lg-12">
                        <label class="control-label"><font style="color: red">*</font> Company Name</label>
                        <input type="text" name="company_name[]" class="form-control" maxlength="100" required="">
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
        
    var new_company = $(document.createElement('div')).attr("id", 'new_company' + counter);
    new_company.after().html(

      '<hr/><br>'+
      '<div class="form-group col-lg-12">'+
        '<label class="control-label"><font style="color: red">*</font> Company Name</label>'+
        '<input type="text" name="company_name[]" class="form-control" maxlength="100" required="">'+
      '</div>'+
      '<br>'

    );

    new_company.appendTo("#TextBoxesGroup");
    counter++;
  });

  $("#removeButton").click(function (){
    if(counter==1){
      alert("No more forms to remove");
      return false;
    }
    counter--;
    $("#new_company" + counter).remove();
  });

});

</script>