<?php
include('include/header.php');
include('include/navbar.php');
include('include/dbconnection.php');
if(isset($_POST['submit']))
  {
    $incomedate=$_POST['incomedate'];
     $incsou=$_POST['incsou'];
     $amount=$_POST['amu'];
    $query=mysqli_query($con, "insert into income(incomedate,incsou,amount) values('$incomedate','$incsou','$amount')");
if($query){

 echo "<script>window.location.href='mang_income.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}
  }
?> 
    
       <div class="page-wrapper" style="min-height: 250px;"> 
          
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h2 class="page-title">Income</h2>
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
                                     <label class="col-md-12 p-0">Income Date</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="Date" 
                                                name="incomedate" class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="item-name" class="col-md-12 p-0">Income Source</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" class="form-control p-0 border-0" name="incsou">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Amount</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="amu" class="form-control p-0 border-0">
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
                         
        

<?php
include('include/footer.php');
?>