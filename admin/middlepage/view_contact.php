  

<!--=================================
 Main content -->

 <!--=================================
wrapper -->

  <div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">View Services</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">View Services</li>
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
                <h5 class="card-title pb-0 border-0">View Services</h5>
              </div>
               </div>
             </div>
             <div class="table-responsive mt-15">
              <table class="table center-aligned-table mb-0">
                <thead>
                  <tr class="text-dark">
                    <th> No</th>
                    <th>Service Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $sql = mysqli_query($con,"select * from `services`"); 
                  $id = 1;
                  while($row = mysqli_fetch_array($sql)){
                  ?>
                  <tr>
                    <td><?php echo $id++; ?></td>
                    <td><?php echo $row['Service_Name']; ?></td>
                    <td><?php if($row['IsActive']==1) { ?>Active<?php }else { ?>InActive <?php } ?></td>
                    <td><a href="">Update</a> | <a href="index.php?page=services_add_action&id=<?php echo $row['id']; ?>">Delete</a></td>
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
