

  <div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">Add Emp</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Add Emp </li>
            </ol>
          </div>
        </div>
    </div>
    <!-- main body --> 
    <div class="row">   
      <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
           <h5 class="card-title">Add Emp</h5>
           <form id="signupForm" method="post" class="form-horizontal">
              <div class="form-group">
                <label class="control-label" for="fname">First name</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" id="fname" name="fname" placeholder="First name" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="lname">Last name</label>
                <div class="mb-2">
                  <input type="text" required="" class="form-control" id="lname" name="lname" placeholder="Last name" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="uemail">Email</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" id="uemail" name="uemail" placeholder="Email" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="upassword">Password</label>
                <div class="mb-2">
                  <input type="password" required class="form-control" id="upassword" name="upassword" placeholder="Password" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="uconfirm_password">Confirm password</label>
                <div class="mb-2">
                  <input type="password" required class="form-control" id="uconfirm_password" name="uconfirm_password" placeholder="Confirm password" />
                </div>
              </div>
              <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" required id="uagree" name="uagree" value="agree" class="pr-2" /> Please agree to our policy
                    </label>
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
