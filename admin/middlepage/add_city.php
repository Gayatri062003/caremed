

  <div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">Add City</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Add City </li>
            </ol>
          </div>
        </div>
    </div>
    <!-- main body --> 
    <div class="row">   
      <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
           <h5 class="card-title">Add City</h5>
           <form method="post" action="index.php?page=city_action" class="form-horizontal">
              
                <div class="form-group">
                <label class="control-label" for="fname">Select State</label>
                <div class="mb-2">
                  <select name="State" class="form-control">
                    <option value="">==Select State==</option>
                    <?php $sql = mysqli_query($con,"select * from `state`");
                    while ($row = mysqli_fetch_array($sql)){
                      ?>
                    
                    
                    <option value="<?php echo $row['State_ID']; ?>"><?php echo $row['State_Name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>  

              <div class="form-group">
                <label class="control-label" for="fname">City Name</label>
                <div class="mb-2">
                  <input type="text" required class="form-control" id="fname" name="city" placeholder="City Name" />
                </div>
              </div>

                <div class="form-group">
                <label class="control-label" for="fname">Select Status</label>
                <div class="mb-2">
                  <select name="status" class="form-control">
                    <option value="">==Select Status==</option>
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
