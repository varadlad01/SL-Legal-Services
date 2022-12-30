<!DOCTYPE html>
<html>
<head>
  <title>SL Legal Services</title>
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
     <!--  <center><h3>Faculty List</h3></center> -->
      <br>
      <center>
        <table class="table table-striped table-bordered" style="width: 80%;">
          <thead >
            <tr>
              <th class="col-md-1"><center>Sr.No</center></th>
              <th class="col-md-2"><center>Name<center></th>      
                <th class="col-md-2"><center>Email</center></th>
                <th class="col-md-1"><center>Mobile</center></th>
                
                <th class="col-md-2"><center>Subject</center></th>
                <th class="col-md-3"><center>Query</center></th>
                <th class="col-md-1"><center>Date</center></th>
                <th class="col-md-2"><center>Delete</center></th>

              </tr>
            </thead>        
            <tbody>
             <?php
             include('slconnection.php');

             $i=1;
      
             $sql = "SELECT * FROM query";

             $result = mysqli_query($conn, $sql);

             echo "<center><b><h1 style='font-size:30px;'>Queries</h1></b></center><br>";

             if (mysqli_num_rows($result) > 0) 
             {
                                        // output data of each row
              while($row = mysqli_fetch_assoc($result)) 
              {
                $srno= $row["srno"];
                $name = $row["name"];
                $emailid = $row["emailid"];
                $mobileno=$row["mobileno"];
                $querydate=$row["querydate"];
                $subject=$row["subject"];
                $yourquery=$row["yourquery"];

                echo '
                
                <tr>
                <td>'.$i.'</td>
                <td>'.$name.'</td> 
                <td>'.$emailid.'</td>                            
                <td>'.$mobileno.'</td>
                <td>'.$subject.'</td>
                <td>'.$yourquery.'</td>
                <td>'.$querydate.'</td>
                <td>
                   
                    <a href="delete-query-data.php?srno='.$srno.'" class="btn btn-danger"> Delete </a>
                  
                </td>

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