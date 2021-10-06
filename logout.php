<?php
    session_start();
    if(empty($_SESSION['id'])):
        header('Location:login.php');
    endif;
    
?>  
<html lang="en">
<body>
     <div style="align:center; width=150px; margin:auto; height=200px; margin-top:300px">
     <?php 
    include('include/dbconnection.php');

    session_destroy();
    echo '<meta http-equiv="refresh" content="2;url=login.php">';
    echo '<progress max="100"><stonge>Progress: 60% done.</stonge></progress><br>';
    echo '<span class="itext">Logging out please wait...</span>';
  

?>
    </div>
</body>
</html>