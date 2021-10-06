<?php
include('include/header.php');
include('include/navbar.php');

//code delelation
include('include/dbconnection.php');
if(isset($_GET['id']))
{
$rowid=intval($_GET['id']);
$query=mysqli_query($con,"delete from income where id='$rowid'");
if($query){
echo "<script>window.location.href='mang_income.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}

}


?>     
                    <div class="page-wrapper">
           
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h2 class="page-title">Income Report</h4>
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
                                $sid=$_SESSION['id'];
                                $sql="select * from income";
                                $cnt=1;
                                $res=mysqli_query($con,$sql);
                                if(mysqli_num_rows($res)>0){
                                    ?>
                                 <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">S.No</th>
                                            <th class="border-top-0">Income Date</th>
                                            <th class="border-top-0">Name Of Source</th>
                                            <th class="border-top-0">Amount</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                             <?php
                             while($row=mysqli_fetch_assoc($res)){
                             ?>
                                 <tbody>
                                        <tr>
                                        <td><?php echo $cnt;?></td>
                                            <td><?php echo $row['incomedate'];?></td>
                                            <td><?php echo $row['incsou'];?></td>
                                            <td><?php echo $row['amount'];?></td>
                                            <td><a href="Mang_income.php?id=<?php echo $row['id'];?>"><i class=" fas fa-trash-alt" style="color:black;"></i></a>
                                        </tr>
                                        <?php 
                                      $cnt=$cnt+1;
                                    } ?>
     
</tbody>
</table>
<?php }?>

</div>
</div>
<!-- Start button part -->
                                                     <div class = "btn-group-justified btn-group-sm btn-group-horizental"> 
                                                    <a href="mang_inc_date_repo.php"><button type = "button" class = "btn btn-dark">Date Wise Report</button></a>
                                                     <a href="mang_inc_month_repo.php"><button type = "button" class = "btn btn-dark">Month Wise Report</button></a>
                                                     <a href="mang_inc_year_repo.php"><button type = "button" class = "btn btn-dark">Year Wise Report</button></a>
                                                    
                                                    </div>
<!--end Part  -->
</div>                                    
</div>    
 </div>                                     
</div>
         

<?php
include('include/footer.php');
?>