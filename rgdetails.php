

<!DOCTYPE html>
<html>
<head>
  <title>RG Details</title>
  <script type="text/javascript">
    let element = document.getElementById("faculty");
    element.classList.add("active");
</script>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel = "icon" href =  "images/titlelogo.jpg" type = "image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>


</head>

  <body>

    


    <div class="col-md-12 right-panel" >
    
      <br><center>
        <form action="rgdetails.php" method="POST" enctype="multipart/form-data">
      <div class="row" style="width: 40%; position: center; margin-top: 30px;">
      <label style="font-size: 20px;">Select a Date</label>
      <input class="form-control" type="date" name="detaildate" required><br></div>
      <button type="submit" name="submit" value="submit">SUBMIT</button></center>
      </form>
      <center>
        <table class="table table-striped table-bordered" style="width: 80%;">
          <thead >
            <tr>
              <th class="col-md-1"><center>Sr.No</center></th>
              <th class="col-md-1"><center>Date<center></th>      
                <th class="col-md-1"><center>GYM<center></th>
                <th class="col-md-2"><center>Study</center></th>
                <th class="col-md-2"><center>Breakfast</center></th>
                <th class="col-md-2"><center>Lunch</center></th>
                <th class="col-md-2"><center>Dinner</center></th>
                <th class="col-md-2"><center>Notes</center></th>

              </tr>
            </thead>        
            <tbody>
             <?php
             include('slconnection.php');

             $i=1;
              
           



             if(isset($_POST["detaildate"]))
             {
                $detaildate=$_POST["detaildate"];

                $sql = "SELECT * FROM rgstatus WHERE statusdate='$detaildate'";
             }
             else
             {
                $sql = "SELECT * FROM rgstatus";
             }
             $result = mysqli_query($conn, $sql);

             echo "<center><b><h1 style='font-size:30px;'>RG Details</h1></b></center><br>";

             if (mysqli_num_rows($result) > 0) 
             {
                    
              while($row = mysqli_fetch_assoc($result)) 
              {
                $srno= $row["srno"];
                $statusdate = $row["statusdate"];
                $gym = $row["gym"];
                $study=$row["study"];
                $breakfast=$row["breakfast"];
                $lunch=$row["lunch"];
                $dinner=$row["dinner"];
                $notes=$row["notes"];
                echo '
                
                <tr>
                <td>'.$i.'</td>
                <td>'.$statusdate.'</td> 
                <td>'.$gym.'</td>                            
                <td>'.$study.'</td>
                <td>'.$breakfast.'</td>
                <td>'.$lunch.'</td>
                <td>'.$dinner.'</td>
                <td>'.$notes.'</td>
                
                </tr>
                
                ';

                $i++;
              }
            }

            ?>

           

          </tbody>
        </table>

      </center>
    </div>

     

    </body>
    </html>