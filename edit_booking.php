<?php 
include('include/header.php');
include('include/navbar.php');
?>



<div class="page-wrapper" style="min-height: 250px;"> 
          
          <div class="page-breadcrumb bg-white">
              <div class="row align-items-center">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <h2 class="page-title">Booking - Form</h2>
                  </div>
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      <div class="d-md-flex">
                          <ol class="breadcrumb ms-auto">
                          <li><a href="dashboard.php" class="fw-normal">Dashboard</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                            
                            <li><a href="logout.php" class="fw-normal">Logout</a></li>
                          </ol>
                        
                      </div>
                  </div>
              </div>
             
          </div>
         
          <div class="container-fluid">
           
                  <div class="col-md-12">
                      <div class="white-box">
                          <!-- <h2 class="box-title"> Add Expnses</h2> -->
                      <?php
                          include('include/dbconnection.php');
$bookid=$_GET['id'];
$sql = "SELECT * from  bookings Where bookingid={$bookid}";

$result =mysqli_query($con,$sql) or die("qury erroe");
 if(mysqli_num_rows($result)>0) {
     while($row = mysqli_fetch_assoc($result)){ 
?>
                          <form class="form-horizontal form-material"action="updateData.php" method="POST">
                                  <div class="form-group mb-4">
                                   <label class="col-md-12 p-0">Booking Date</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="Date" 
                                              name="bookingdate" value="<?php echo $row['bookingdate'];?>" class="form-control p-0 border-0"> </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <label for="item-name" class="col-md-12 p-0">Booking Id</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="text" value="<?php echo $row['bookingid'];?>" class="form-control p-0 border-0" name="bookingid">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <label for="item-name" class="col-md-12 p-0">Booking Name</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="text" value="<?php echo $row['bookingname'];?>" class="form-control p-0 border-0" name="bookingname">
                                      </div>
                                  </div>
                                
                                  <div class="form-group mb-4">
                                      <label class="col-md-12 p-0">Booking From Date - To Date</label>
                                      <div class="col-md-12 border-bottom p-0">
                                      <input type="Date" name="fdate" value="<?php echo $row['fdate'];?>" class="form-control p-0 border-0">
                                      <input type="Date" name="tdate" value="<?php echo $row['tdate'];?>" class="form-control p-0 border-0"> 
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <label for="item-name" class="col-md-12 p-0">Total Amount</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="text" value="<?php echo $row['totalamount'];?>" class="form-control p-0 border-0" name="totalamount">
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <label for="item-name" class="col-md-12 p-0">Paid Amount</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="text" value="<?php echo $row['advanced'];?>" class="form-control p-0 border-0" name="advanced">
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <label for="item-name" class="col-md-12 p-0">Amount Status</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="text" value="<?php echo $row['amountstatus'];?>" class="form-control p-0 border-0" name="amountstatus">
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <div class="col-sm-12">
                                         <input type="submit" name="submit" value="Update" class="btn btn-success bg-dark">
                                    
                                      <div class = "btn-group-justified btn-group-sm btn-group-horizental" style="float:right"> 
                                <a href="show_booking.php"><button type = "button" class = "btn btn-dark">booking page</button></a>
                                  </div>
                                  </div>
                  </div>
              </div>
                  </from>
                  <?php }
                  } ?>
                      </div>
                        </div>
                       
      



<?php include('include/footer.php');