

  <div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">Add Employee</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Add Employee </li>
            </ol>
          </div>
        </div>
    </div>
    <?php 
    $id = $_GET['id'];
    $sql = mysqli_query($con,"select * from `employee_registration` where `Emp_ID` = '".$id."'");
    $row = mysqli_fetch_array($sql);

    ?>
    <!-- main body --> 
    <div class="row">   
      <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
           <h5 class="card-title">Add Employee</h5>
           <form action="index.php?page=add_user_action" method="post" class="form-horizontal">
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <label class="control-label" for="fname">First name</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" id="fname" value="<?php echo $row['Emp_FName']; ?>" name="fname" placeholder="First name" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="lname">Last name</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" id="lname" value="<?php echo $row['Emp_LName']; ?>" name="lname" placeholder="Last name" />
                </div>
              </div>
             
              <div class="form-group">
                <label class="control-label" for="uemail">Email</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" id="uemail" value="<?php echo $row['Email']; ?>" name="uemail" placeholder="Email" />
                </div>
              </div>

               <div class="form-group">
                <label class="control-label" for="uemail">Contact Number</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" id="uemail" name="contactnumber" value="<?php echo $row['Contact_No']; ?>" placeholder="Contact Number" />
                </div>
              </div>


               <div class="form-group">
                <label class="control-label" for="uemail">Gender</label>
                <div class="mb-2">
                  <select name="gender" class="form-control">
                    <option value="">--Select Gender --</option>
                    <option value="M">Male</option>
                    <option value="F">FeMale</option>
                  </select>
                 
                </div>
              </div>

              <div class="form-group">
                <label class="control-label" for="upassword">Date of birth</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" value="<?php echo $row['DOB']; ?>" id="upassword" name="dob" placeholder="Date Of Birth" />
                </div>
              </div>

              <div class="form-group">
                <label class="control-label" for="uconfirm_password">Password</label>
                <div class="mb-2">
                  <input type="password" required class="form-control" value="<?php echo $row['Password']; ?>" id="uconfirm_password" name="password" placeholder="Password" />
                </div>
              </div>


               <div class="form-group">
                <label class="control-label" for="uconfirm_password">Address</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" value="<?php echo $row['Address']; ?>" id="uconfirm_password" name="address" placeholder="Addresss" />
                </div>
              </div>
              


               <div class="form-group">
                <label class="control-label" for="uconfirm_password">Address Proof</label>
                <div class="mb-2">
                  <input type="file" required class="form-control" value="<?php echo $row['address_proof']; ?>" id="uconfirm_password" name="addressProof" placeholder="Address Proof" />
                </div>
              </div>


                  <div class="form-group">
                <label class="control-label" for="fname">Select State</label>
                <div class="mb-2">
                  <select name="State" class="form-control">
                    <option value="">==Select State==</option>
                    <?php $sql = mysqli_query($con,"select * from `state`");
                    while ($row = mysqli_fetch_array($sql)){
                      ?>
                    
                    
                    <option value="<?php echo $row['State_Name']; ?>"><?php echo $row['State_Name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>  

               <div class="form-group">
                <label class="control-label" for="fname">Select City</label>
                <div class="mb-2">
                  <select name="City" class="form-control">
                    <option value="">==Select city==</option>
                    <?php $sql = mysqli_query($con,"select * from `city`");
                    while ($row = mysqli_fetch_array($sql)){
                      ?>
                    
                    
                    <option value="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>  
              

              <div class="form-group">
                <label class="control-label" for="fname">Select Area</label>
                <div class="mb-2">
                  <select name="Area" class="form-control">
                    <option value="">==Select State==</option>
                    <?php $sql = mysqli_query($con,"select * from `area`");
                    while ($row = mysqli_fetch_array($sql)){
                      ?>
                    
                    
                    <option value="<?php echo $row['Area_Name']; ?>"><?php echo $row['Area_Name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>  
              <div class="form-group">
                <label class="control-label" for="uconfirm_password">Profile Pic</label>
                <div class="mb-2">
                  <input type="file" class="form-control" id="uconfirm_password" value="<?php echo $row['Photo']; ?>" name="profile" placeholder="Profile Pic" />
                </div>
              </div>



              <div class="form-group">
                <label class="control-label" for="uconfirm_password">Experience</label>
                <div class="mb-2">
                  <input type="text" class="form-control" id="uconfirm_password" value="<?php echo $row['Experience']; ?>" name="Experience" placeholder="Experience" />
                </div>
              </div>



              <div class="form-group">
                <label class="control-label" for="uconfirm_password">Joining Date</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" id="uconfirm_password" value="<?php echo $row['Joining_Date']; ?>" name="Joining" placeholder="Joining Date" />
                </div>
              </div>

              <div class="form-group">
                <label class="control-label" for="uconfirm_password">Resign Date</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" value="<?php echo $row['Resign_Date']; ?>" id="uconfirm_password" name="Resign" placeholder="Resign Date" />
                </div>
              </div>

               <div class="form-group">
                <label class="control-label" for="uconfirm_password">Emp Type</label>
                <div class="mb-2">
                    <select name="type" class="form-control">
                    <option value="">--Select Gender --</option>
                    <option value="C">CA</option>
                    <option value="I">Intain</option>
                  </select>
                 
                </div>
              </div>

               <div class="form-group">
                <label class="control-label" for="uconfirm_password">Status</label>
                <div class="mb-2">
                    <select name="Status" class="form-control">
                    <option value="">--Select Gender --</option>
                    <option value="1">Active</option>
                    <option value="0">InActive</option>
                  </select>
                
                </div>
              </div>


              
              <?php if(isset($_GET['id'])) { ?>
              <div class="form-group">
             <button type="submit" class="btn btn-primary" name="update" value="Sign up">Update</button>
              </div>
            <?php }else { ?>
              <div class="form-group">
             <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
              </div>
              <?php } ?>
            </form>
          </div>
        </div>   
      </div>
  </div> 

 <!--=================================
 wrapper -->
