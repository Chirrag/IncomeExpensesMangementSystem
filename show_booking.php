<?php
error_reporting(0);
include('include/header.php');
include('include/navbar.php');

//code delelation
include('include/dbconnection.php');
if(isset($_GET['id']))
{
$rowid=intval($_GET['id']);
$query=mysqli_query($con,"delete from bookings where id='$rowid'");
if($query){
echo "<script>window.location.href='show_booking.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}

}


?>     
                    <div class="page-wrapper">
           
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h2 class="page-title">Booking Table</h4>
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
             
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <?php 
                                include('include/dbconnection.php');
                                $sql="select * from bookings";
                                $cnt=$_SESSION['id'];
                                $cnt=1;
                                $res=mysqli_query($con,$sql);
                                if(mysqli_num_rows($res)>0){
                                    ?>
                                 <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">S.No</th>
                                            <th class="border-top-0">Booking Date</th>
                                            <th class="border-top-0">Booking Id</th>
                                            <th class="border-top-0">Booking Name</th>
                                            <th class="border-top-0">Booking From-To Date</th>
                                            <th class="border-top-0">Total Amount</th>
                                            <th class="border-top-0">Paid Amount</th>
                                            <th class="border-top-0">Amount status</th>
                                            <th class="border-top-0">Balance</th>
                                             <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                             <?php
                             while($row=mysqli_fetch_assoc($res)){
                             ?>
                                 <tbody>
                                        <tr>
                                        <td><?php echo $cnt;?></td>
                                            <td><?php echo $row['bookingdate'];?></td>
                                            <td><?php echo $row['bookingid'];?></td>
                                            <td><?php echo $row['bookingname'];?></td>
                                            <td><?php echo $row['fdate'];?>&nbsp;&nbsp;<?php echo $row['tdate'];?></td>
                                            <td><?php echo $totalamount= $row['totalamount'];?></td>
                                            <td><?php echo $advanced= $row['advanced'];?></td>
                                            <td><?php echo $row['amountstatus'];?></td>
                                            <?php 
                                        $balance =$totalamount-$advanced;
                                          ?>
                                             <td><?php echo $balance;?></td>

                                             <td><a href="show_booking.php?id=<?php echo $row['id'];?>"><i class=" fas fa-trash-alt" style="color:black;"></i></a>
                                               &nbsp;  <a href="Edit_booking.php?id=<?php echo $row['bookingid'];?>"><i class="far fa-edit" style="color:black;"></i></a>
                                         &nbsp; <a href="payment_booking.php?id=<?php echo $row['bookingid'];?>"><i class=" fas fa-file-pdf" style="color:black;"></i></a></td>
                                        </tr>
                                        <?php 
                                      $cnt=$cnt+1;
                                    } ?>
     
</tbody>
</table>
<?php }?>

</div>
</div>
</div>                                    
</div>    
                                             
          </div>
                                     
</div>
                                              

<?php
include('include/footer.php');
?>