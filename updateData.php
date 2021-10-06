

<?php
include('include/dbconnection.php');
if(isset($_POST['submit']))
 {
      $bookid=$_POST['bookingid'];
     $bookingdate=$_POST['bookingdate'];
     $bookingid=$_POST['bookingid'];
     $bookingname=$_POST['bookingname'];
     $bookingfrom=$_POST['fdate'];
     $bookingto=$_POST['tdate'];
     $totalamount=$_POST['totalamount'];
     $advanced=$_POST['advanced'];
     $amountstatus=$_POST['amountstatus'];
   $query=mysqli_query($con, "UPDATE bookings SET bookingdate='{$bookingdate}',bookingid='{$bookingid}',bookingname='{$bookingname}',fdate='{$bookingfrom}',tdate='{$bookingto}',  totalamount='{$totalamount}',advanced='{$advanced}',amountstatus='{$amountstatus}' where bookingid={$bookid}" );
   
if($query){

echo "<script>window.location.href='show_booking.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}
 }
?> 

