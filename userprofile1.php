<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#btnSubmit').click(function(){
$(".inner").append("<div id='new' class='new'><form><div class='form-group'><label class='control-label'>Institute Name</label><input maxlength='200' type='text' class='form-control'id='institute' name='institute[]' placeholder='Enter institute Name' /></div><div class='form-group'><label class='control-label'>Degree</label><input maxlength='200' type='text' name='degree[]' id='degree' class='form-control' placeholder='Enter Degree'  /></div><div class='form-group'><label class='control-label'>From</label><input type='month' id='from' name='from' class='form-control'/><label class='control-label'>To</label><input type='month' id='to' name='to' class='form-control' /></div><div class='form-group'><label class='control-label'>Course Type</label><select class='form-control' id='coursetype' name='coursetype'><option>Full time</option><option>Part Time</option><option>Distance Learning</option></select></div><input id = 'btnSubmit' type='button' value='Add'/><button  class='delete'>Delete</button></form> </div>");
});
$('#btnRemove').click(function(){
$(".new").remove();
});

});
$(document).ready(function(){
$('#btnSub').click(function(){
$(".outer").append("<div id='new1' class='new1'><form><div class='form-group'><label class='control-label'>Designation</label><input maxlength='200' type='text'  class='form-control' id='designation' name='designation' placeholder='Enter Designation' /></div><div class='form-group'><label class='control-label'>Organization</label><input maxlength='200' type='text' id='org' name='org' class='form-control' placeholder='Enter Degree'  /></div><div class='form-group'><label class='control-label'>From</label><input type='month' id class='form-control'/><label class='control-label'>To</label><input type='month' class='form-control' /></div></form></div>");
});
$('#btnRem').click(function(){
  $(".new1").remove();
});
}); 

 
  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});

  </script>
<style type="text/css">
body {
    margin-top:40px;
}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>
</head>
<body>
<div class="container">
  
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Personal Detail</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Education</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Professional Detail</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
        <p>Uploads</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="edituser.php" method="post" >
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 1</h3>
          
          <div class="form-group">
            <label class="control-label">First Name</label>
            <input  maxlength="100" type="text"  class="form-control" id="firstname" name="firstname" placeholder="Enter First Name"  />
          </div>
          <div class="form-group">
            <label class="control-label">Last Name</label>
            <input maxlength="100" type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Phone</label>
            <input maxlength="100" type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" />
          </div>
          <div class="form-group">
            <label class="control-label">Date of Birth</label>
            <input maxlength="100" type="date"class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth" />
          </div>
          <div class="form-group">
            <label class="control-label">Current Location</label>
            <input maxlength="100" type="text" class="form-control" id="city" name="city" placeholder="Enter Current Location" />
          </div>
          <div class="form-group">
            <label class="control-label">Gender</label>
            <select class="form-control" id="gender" name="gender">
            <option>Male</option>
            <option>Female</option>
            </select>
          </div>
          <div class="form-group">
            <label class="col-md-4 col-sm-4 control-label" style="padding-left:0;">Experience</label>
            <div class="col-md-3 col-sm-3 pd10" >
            <select name="expyear" id='expyear' class="form-control" onchange="">
                <option value='' >
                YYYY            </option>
                        <option value='0' >
                0            </option>
                        <option value='1' >
                1            </option>
                        <option value='2' >
                2            </option>
                        <option value='3' >
                3            </option>
                        <option value='4' >
                4            </option>
                        <option value='5' >
                5            </option>
                        <option value='6' >
                6            </option>
                        <option value='7' >
                7            </option>
                        <option value='8' >
                8            </option>
                        <option value='9' >
                9            </option>
                        <option value='10' >
                10            </option>
                        <option value='11' >
                11            </option>
                        <option value='12' >
                12            </option>
                        <option value='13' >
                13            </option>
                        <option value='14' >
                14            </option>
                <option value='15' >
                15            </option>
                        <option value='16' >
                16            </option>
                        <option value='17' >
                17            </option>
                        <option value='18' >
                18            </option>
                        <option value='19' >
                19            </option>
                        <option value='20' >
                20            </option>
                        <option value='21' >
                21            </option>
                        <option value='22' >
                22            </option>
                        <option value='23' >
                23            </option>
                        <option value='24' >
                24            </option>
                        <option value='25' >
                25            </option>
                        <option value='26' >
                26            </option>
                        <option value='27' >
                27            </option>
                        <option value='28' >
                28            </option>
                        <option value='29' >
                29            </option>
                        <option value='30' >
                30            </option>
                        <option value='31' >
                30+            </option>
                </select>
          </div>
           <div class="col-md-3 col-sm-3 pd10">
          <select name="expmonth" id='expmonth' class="form-control" onchange="">
                            <option value='' >
                MM            </option>
                        <option value='0' >
                0            </option>
                        <option value='1' >
                1            </option>
                        <option value='2' >
                2            </option>
                        <option value='3' >
                3            </option>
                        <option value='4' >
                4            </option>
                        <option value='5' >
                5            </option>
                        <option value='6' >
                6            </option>
                        <option value='7' >
                7            </option>
                        <option value='8' >
                8            </option>
                        <option value='9' >
                9            </option>
                        <option value='10' >
                10            </option>
                        <option value='11' >
                11            </option>
                </select>
              </div>
            </div>
              <div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit" >Next</button></div>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 2</h3>
           
            <div id="container1" class="inner">
              <form method="post" action="">
          <div class="form-group">
            <label class="control-label">Institute Name</label>
            <input maxlength="200" type="text" required="required" class="form-control" id="institute" name="institute" placeholder="Enter institute Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Degree</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Degree"  />
          </div>
          <div class="form-group">
            <label class="control-label">Course Type</label>
                       
            <select class="form-control" id="coursetype" name="coursetype">
            <option>Full time</option>
            <option>Part Time</option>
            <option>Distance Learning</option>
            </select>
          </div>
           <div class="form-group">
            <label class="control-label">From</label>
            <input type='month' class='form-control' id="from" name="from" />
            <label class="control-label">To</label>
            <input type='month' class='form-control' id="to" name="to" />
          </div>
        

 <input id = "btnSubmit" type="button" value="Add"/>
<input id = "btnRemove" type="button" value="Delete"/>
 
 
 <!--<input type="submit" name="submit_val1" class="btn btn-default btn-xs"  value="Submit" />-->
 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
</div>


        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>Step 3</h3>
          <div id="container2" class="outer">
          <div class="form-group">
            <label class="control-label">Designation</label>
            <input maxlength="200" type="text" required="required" class="form-control" id="designation" name="designation[]" placeholder="Enter Designation" />
          </div>
          <div class="form-group">
            <label class="control-label">Organization</label>
            <input maxlength="200" type="text" required="required" id="org" name="org[]" class="form-control" placeholder="Enter Organization"  />
          </div>
           <div class="form-group">
            <label class="control-label">From</label>
            <input type="month" required="required" name="from[]" id class="form-control"/>
            <label class="control-label">To</label>
            <input type="month" required="required" name="to[]" class="form-control" />
          </div>
 <input id = "btnSub" type="button" value="Add"/>
<input id = "btnRem" type="button" value="Add"/>
 
 
 <!--<input type="submit" name="submit_val1" class="btn btn-default btn-xs"  value="Submit" />-->
 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
</div>

          <!--<button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>-->
        </div>
      </div>
    </div>
 <div class="row setup-content" id="step-4">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>Step 4</h3>
          <div id="container2" class="outer">
          <div class="form-group">
            <label class="control-label">Upload your Resume/CV(.docx or PDF formats only)</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
            <input name="userfile" type="file" id="userfile"> 
            <input name="upload" type="submit" class="box" id="upload" value=" Upload ">
          </div>  
          <div class="form-group">
            <label class="control-label">Upload your Profile Picture(PNG/JPEG only)</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
            <input name="userfile" type="file" id="userfile"> 
            <input name="upload" type="submit" class="box" id="upload" value=" Upload ">
          </div>  
          <button class="btn btn-success btn-lg pull-right" type="submit" name="submit" id="submit">Submit</button>
          </div>
          </div>
          </div>
          </div>
  </form> 
</div>
</body>
</html>