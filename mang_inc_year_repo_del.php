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
                       <h2 class="page-title">Income Report year Wise</h4>
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
      <h5 align="center" style="color:blue">Year Wise Income Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
               <hr />
           

                                <table class="table text-nowrap">
                                   <thead>
                                       <tr>
                                           <th class="border-top-0">S.No</th>
                                           <th class="border-top-0"> year</th>
                                           <th class="border-top-0">Income Amount</th>
                                        
                                       </tr>
                                   </thead>
                                   <?php
                                    $sid=$_SESSION['id'];
                                   $ret=mysqli_query($con,"SELECT year(incomedate) as rptyear,SUM(amount) as totalyear FROM income  where (incomedate BETWEEN '$fdate' and '$tdate')  group by year(incomedate)");
                         $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {

                               ?>
                       <tbody>       
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['rptyear'];?></td>
                  <td><?php  echo $ttlsl=$row['totalyear'];?></td>
           
           
                </tr>
                <?php
                $totalsexp+=$ttlsl; 
$cnt=$cnt+1;
}?>

<tr>
  <th colspan="2" style="text-align:center">Grand Total</th>     
  <td><?php echo $totalsexp;?></td>
 </tr>     
</tbody>
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