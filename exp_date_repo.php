<?php
include('include/header.php');
include('include/navbar.php');

?>
    <div class="page-wrapper" style="min-height: 250px;"> 
          
          <div class="page-breadcrumb bg-white">
              <div class="row align-items-center">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <h3 class="page-title">Expenses-Report DateWise</h3>
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
                          <form class="form-horizontal form-material" action="repo_mang_date_detail.php" method="POST">
                                  <div class="form-group mb-4">
                                   <label class="col-md-12 p-0">From Date</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="Date" 
                                              name="fromdate" class="form-control p-0 border-0"> </div>
                                  </div>
                                  <div class="form-group mb-4">
                                      <label for="item-name" class="col-md-12 p-0">To Date</label>
                                      <div class="col-md-12 border-bottom p-0">
                                          <input type="date" class="form-control p-0 border-0" name="todate">
                                      </div>
                                  </div>
                                  <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                           <input type="submit" name="submit" value="submit" class="btn btn-success bg-dark">
                                        </div>
                                    </div>
         </div>
         </div>
         </form>


<?php include('include/footer.php'); ?>