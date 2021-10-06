<?php
error_reporting(0);
 include('include/header.php');
 include('include/navbar.php');
 include('include/dbconnection.php');
 ?>

<div class="page-wrapper">
           
           <div class="page-breadcrumb bg-white">
               <div class="row align-items-center">
                   <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                       <h2 class="page-title">income Report Month Wise</h4>
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
$fdate=$_POST['fromdate'];
 $tdate=$_POST['todate'];
 $rtype=$_POST['requesttype'];

?>
      <h5 align="center" style="color:blue">MonthWise income Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
               <hr />
           

                                <table class="table text-nowrap">
                                   <thead>
                                       <tr>
                                           <th class="border-top-0">S.No</th>
                                           <th class="border-top-0">Month- year</th>
                                           <th class="border-top-0">income Amount</th>
                                        
                                       </tr>
                                   </thead>
                                   <?php
                                   include('include/dbconnection.php');
                                   $sid=$_SESSION['id'];
                                   $ret=mysqli_query($con,"SELECT month(incomedate) as rptmonth,year(incomedate) as rptyear,SUM(amount) as totalmonth FROM income  where (incomedate BETWEEN '$fdate' and '$tdate') group by month(incomedate),year(incomedate)");
                                   $cnt=1;
                                   while ($row=mysqli_fetch_array($ret)) {
                                   
                                   ?>
    
                                <tbody>
                                       <tr>
                                       <td><?php echo $cnt;?></td>
                                    
            <td><?php  echo $row['rptmonth']."-".$row['rptyear'];?></td>
            <td><?php  echo $ttlsl=$row['totalmonth'];?></td>
     
     
                                       </tr>
                                       <?php
                                          
                                    $totalsexp+=$ttlsl; 
                                     $cnt=$cnt+1;
 } ?>
     <tr>
  <th colspan="2" style="text-align:center">Grand Total</th>     
  <td><?php echo $totalsexp;?></td>
 </tr>     
    </tobody>
</table>

                    
</div>
</div>
</div>                                    
</div>    
 </div>
</div>



<?php
 include('include/footer.php');
 ?>