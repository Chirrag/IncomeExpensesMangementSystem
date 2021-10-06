<?php
include('include/header.php');
include('include/navbar.php');
include('include/dbconnection.php');


?>

 <?php
 if(isset($_POST['submit']))
  {
      $bookingdate=$_POST['bookingdate'];
      $bookingid=$_POST['bookingid'];
      $bookingname=$_POST['bookingname'];
      $bookingfrom=$_POST['fdate'];
      $bookingto=$_POST['tdate'];
      $totalamount=$_POST['totalamount'];
      $advanced=$_POST['advanced'];
      $amountstatus=$_POST['amountstatus'];
      $cnt=$_SESSION['id'];
      $query=mysqli_query($con, "insert into bookings(bookingdate,bookingid,bookingname,fdate,tdate,totalamount,advanced,amountstatus) value('$bookingdate','$bookingid','$bookingname','$bookingfrom','$bookingto','$totalamount','$advanced','$amountstatus')");
if($query){

 echo "<script>window.location.href='show_booking.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}
  }
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
                          <form class="form-horizontal form-material" method="POST">
                                  <div class="form-group mb-4">
                                   <label class="col-md-12 p-0">Booking Date</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="Date" 
                                              name="bookingdate" class="form-control p-0 border-0"> </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <label for="item-name" class="col-md-12 p-0">Booking Id</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="text" class="form-control p-0 border-0" name="bookingid">
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <label for="item-name" class="col-md-12 p-0">Booking Name</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="text" class="form-control p-0 border-0" name="bookingname">
                                      </div>
                                  </div>
                                
                                  <div class="form-group mb-4">
                                      <label class="col-md-12 p-0">Booking From Date - To Date</label>
                                      <div class="col-md-12 border-bottom p-0">
                                      <input type="Date" name="fdate" class="form-control p-0 border-0">
                                      <input type="Date" name="tdate" class="form-control p-0 border-0"> 
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <label for="item-name" class="col-md-12 p-0">Total Amount</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="text" class="form-control p-0 border-0" id="totalamount" name="totalamount">
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <label for="item-name" class="col-md-12 p-0">Paid Amount</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="text" class="form-control p-0 border-0" id="advanced" name="advanced">
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <label for="item-name" class="col-md-12 p-0">Amount status</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="text" class="form-control p-0 border-0" id="status" name="amountstatus">
                                      </div>
                                  </div>
                                 



                                  <div class="form-group mb-4">
                                      <div class="col-sm-12">
                                         <input type="submit" name="submit" value="Add" class="btn btn-success bg-dark">
                                      </div>
                                  </div>
                  </div>
              </div>
                  </from>
                      </div>
                        </div>
                       
      





</script>
<?php 
include('include/footer.php');