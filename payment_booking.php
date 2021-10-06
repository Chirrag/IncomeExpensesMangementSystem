<?php 
error_reporting(0);
include('include/header.php');
include('include/navbar.php');

?>

<div class="page-wrapper" style="min-height: 250px;"> 
          
          <div class="page-breadcrumb bg-white">
              <div class="row align-items-center">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <h2 class="page-title">Booking Report</h2>
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
             <div>
          </div>
        <hr>
          
          <!-- starting table view ember  -->
          <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <?php
                          $balance=0;
                          include('include/dbconnection.php');
                          $sid=$_SESSION['id'];
                          $bookid=$_GET['id'];  
                        
                          $sql = "SELECT * from  bookings Where bookingid={$bookid}";
                                $res=mysqli_query($con,$sql) or die("connection error");
                                if(mysqli_num_rows($res)>0){
                                    ?>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                <?php
                                while($row=mysqli_fetch_assoc($res)){
                                ?>
                                <tbody>    
                                <thead>
                                        <tr>
                                            <th class="border-top-0">Booking Date</th>
                                            <td><?php echo $row['bookingdate'];?></td> 
                                         </tr>
                                            <th class="border-top-0">Booking ID</th>
                                            <td><?php echo $row['bookingid'];?></td>
                                            </tr>
                                            <tr>
                                            <th class="border-top-0">Booking Name</th>
                                            <td><?php echo $row['bookingname'];?></td>
                                            </tr>
                                            <tr>
                                            <th class="border-top-0">Booking From to Date</th>
                                            <td><?php echo $row['fdate'];?>&nbsp;&nbsp;<?php echo $row['tdate'];?></td>
                                            </tr>
                                            <tr>
                                            <th class="border-top-0">Total Amount</th>
                                            <td  id="totalamount"><?php echo $totalamount=$row['totalamount'];?></td>
                                        </tr>
                                            <tr>
                                            <th class="border-top-0">Paid Amount</th>
                                            <td style="color:red;"id="advanced" ><?php echo $advanced=$row['advanced'];?></td>
                                        </tr>
                                            <tr>
                                            <th class="border-top-0">Amount status</th>
                                            <td><?php echo $row['amountstatus'];?></td>
                                        </tr>
                                        <?php 
                                        $balance =$totalamount-$advanced;
                                  }}  ?>
                                            <tr>
                                            <th class="border-top-0">Balance</th>
                                            <td style="color:blue;" id="balance"><?php echo $balance;?></td>
                                        </tr>
                                    </thead>
                                        </tbody>
                                </table>
                                <div class = "btn-group-justified btn-group-sm btn-group-horizental"> 
                                                    <a href="show_booking.php"><button type = "button" class = "btn btn-dark">Back</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form payment  -->
               
                

                






<?php 
include('include/footer.php');
?>