

  <div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">Add Services</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Add Services </li>
            </ol>
          </div>
        </div>
    </div>
    <!-- main body --> 
    <div class="row">   
      <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
           <h5 class="card-title">Add Services</h5>
           <form method="post" action="index.php?page=services_add_action" class="form-horizontal">
              <div class="form-group">
                <label class="control-label" for="fname">Services Name</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" id="fname" name="fname" placeholder="Services Name" />
                </div>
              </div>


              <div class="form-group">
                <label class="control-label" for="fname">Chargs</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" id="fname" name="Chargs" placeholder="Services Name" />
                </div>
              </div>

              <div class="form-group">
                <label class="control-label" for="lname">Status</label>
                <div class="mb-2">
                 <select name='lname'>
                    <option value="">-select status-</option>
                    <option value="1">Active</option>
                    <option value="0">InActive</option>
                 </select>
                </div>
              </div>
              
              <div class="form-group">
             <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
              </div>
            </form>
          </div>
        </div>   
      </div>
  </div> 

 <!--=================================
 wrapper -->
