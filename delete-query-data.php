<?php
         include('slconnection.php');
        
        if(isset($_GET["srno"]))
          {

            if($conn)
            {
              $srno = $_GET['srno'];
             
              $sql = "DELETE FROM query WHERE srno = '$srno'";
              if(mysqli_query($conn, $sql))
              {
               echo "<script type='text/javascript'>alert('Delete Success.')</script>";
                echo '<script type="text/javascript">window.location.href = "query-data.php";</script>';
                
              }
            }
            
            else
            {
              echo "<script>alert('Connection Failed')</script>";
            }
          }

      ?>