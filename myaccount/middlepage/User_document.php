

  <div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">Upload Document</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Upload Document</li>
            </ol>
          </div>
        </div>
    </div>
    <!-- main body --> 
    <div class="row">   
      <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
           <h5 class="card-title">Upload Document</h5>
           <form action="index.php?page=Document_upload" method="post" class="form-horizontal" enctype="multipart/form-data">
             
             <div class="form-group">
                <label class="control-label" for="fname">Select Services</label>
                <div class="mb-2">
                  <select name="services" class="form-control">
                    <option value="">==Select Services==</option>
                    <?php $sql = mysqli_query($con,"select * from `services` where `IsActive` = '1' "); while($row = mysqli_fetch_array($sql)) { ?>
                    <option value='<?php echo $row['id']; ?>|<?php echo $row['Chargs']; ?>'><?php echo $row['Service_Name']; ?></option>
                   
                  <?php } ?>
                  </select>
                   
                </div>
              </div>

              

              <div class="form-group">
                <label class="control-label" for="fname">Adhar  Card</label>
                <div class="mb-2">
                  <input type="file" class="form-control" id="fname" name="adharcard" placeholder="State name" />
                </div>
              </div>

               <div class="form-group">
                <label class="control-label" for="fname">Pan Card</label>
                <div class="mb-2">
        <input type="file" class="form-control" id="fname" name="pancard" placeholder="State name" />
                </div>
              </div>

               <div class="form-group">
                <label class="control-label" for="fname">Bank Account</label>
                <div class="mb-2">
                  <input type="file" class="form-control" id="fname" name="bankaccount" placeholder="State name" />
                </div>
              </div>

               <div class="form-group">
                <label class="control-label" for="fname">Registered office proof</label>
                <div class="mb-2">
                  <input type="file" class="form-control" id="fname" name="Registered" placeholder="State name" />
                </div>
              </div>


              <div class="form-group">
                <label class="control-label" for="fname">Description</label>
                <div class="mb-2">
                  <textarea class="form-control" name="Description"></textarea>
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
