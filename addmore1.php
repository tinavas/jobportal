<form>
  <div id="container1" class="inner">
              
          <div class="form-group">
            <label class="control-label">Institute Name</label>
            <input maxlength="200" type="text" required="required" class="form-control" id="institute" name="institute[]" placeholder="Enter institute Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Degree</label>
            <input maxlength="200" type="text" required="required"id="degree" name="degree[]" class="form-control" placeholder="Enter Degree"  />
          </div>
          <div class="form-group">
            <label class="control-label">Course Type</label>
                       
            <select class="form-control" id="coursetype" name="coursetype[]">
            <option>Full time</option>
            <option>Part Time</option>
            <option>Distance Learning</option>
            </select>
          </div>
           <div class="form-group">
            <label class="control-label">From</label>
            <input type='month' class='form-control' id="from" name="from1[]" />
            <label class="control-label">To</label>
            <input type='month' class='form-control' id="to" name="to1[]" />
          </div>
</form>
