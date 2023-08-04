

<!--=================================
 Main content -->

 <!--=================================
wrapper -->

  <div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">View Employee</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">View Employee</li>
            </ol>
          </div>
        </div>
    </div>
    <!-- main body --> 
    <div class="row">   
      <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
           <div class="d-block d-md-flex justify-content-between">
              <div class="d-block">
                <h5 class="card-title pb-0 border-0">View Employee</h5>
              </div>
               </div>
             </div>
             <div class="table-responsive mt-15">
              <table class="table center-aligned-table mb-0">
                <thead>
                  <tr class="text-dark">
                    <th> No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                      <th>Email</th>
                        <th>Contact Number</th>
                          <th>Gender</th>
                            <th>Date Of Brith</th>
                              <th>Address</th>
                                <th>Address Proof</th>
                                  <th>State</th>
                                    <th>City</th>
                                    <th>Area</th>
                                    <th>Profile Pic</th>
                                    <th>Experience</th>
                                    <th>Joining Date</th>
                                    <th>Resign Date</th>
                                    <th>Emp Type</th>
                                    <th>Status</th>
                                     <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $sql = mysqli_query($con,"select * from `employee_registration`");
                  $i = 1;
                  while($row = mysqli_fetch_array($sql)) {
                   ?>
                  
                  <tr>
                    <td><?php echo $i++;?></td>
                    <td><?php echo $row['Emp_FName']; ?></td>
                    <td><?php echo $row['Emp_LName']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Contact_No']; ?></td>
                    <td><?php if($row['Gender']=="M") { ?>Male<?php }else { ?>Female<?php } ?></td>
                    <td><?php echo $row['DOB']; ?></td>
                    <td><?php $row['Address']; ?></td>
                    <td><img src="<?php echo $row['address_proof']; ?>"></td>
                    <td><?php echo $row['Area_ID']; ?></td>
                    <td><?php echo $row['City_ID']; ?></td>
                    <td><?php echo $row['State_ID']; ?></td>
                    <td><img src="<?php echo $row['Photo']; ?>" heigth=100px width = 100px></td>
                    <td><?php echo $row['Experience']; ?></td>
                    <td><?php echo $row['Joining_Date']; ?></td>
                    <td><?php echo $row['Resign_Date']; ?></td>
                    <td><?php if($row['emp_type']=="C") {   ?>CA<?php }else { ?><?php } ?></td>
                    <td><?php if($row['IsActive']=="1") { ?>Active<?php }else { ?>Inactive<?php } ?></td>
                     <td><a href="index.php?page=add_user&id=<?php echo $row['Emp_ID']; ?>">Update</a> | <a href="index.php?page=add_user_action&id=<?php echo $row['Emp_ID']; ?>">Delete</a></td>
                  

                  </tr>
                 <?php } ?>
                   
                </tbody>
              </table>
            </div>
          </div>
        </div>   
      </div>
  </div> 

 <!--=================================
 wrapper -->
