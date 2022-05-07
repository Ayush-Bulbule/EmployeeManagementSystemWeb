
<!doctype html>
<html lang="en">

  <head>
  <link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>DSR-View</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
   
  </head>
  <body>
    <style>
        body {
            background-color: #dee9ff;
            }
    </style>
</br>
<div><table align = "left">
<td><a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dsr_cs';?>" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true">Back</a></td>
<td><td>
        <td><td>
        <td><td>
</table>
</div>
            <div class="container"> 
               <center> <h1>Welcome to Distribution Details</h1> </center>
            </div>
        </div>
</br></br>
<div class="container">
<table class="table table-striped table-hover" >
                <thead class="thead-dark">
                 <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Quantity Distributed</th>
                        <th scope="col">Quantity Remaining</th>
                        <th scope="col">Date Distributed</th>
                        <th scope="col">Head Office Initials</th>
                    </tr>

                    
                    <?php
  $i=1;
  foreach($data as $row)
  {
 
  echo "<td>".$row->Product_ID."</td>";
  echo "<td>".$row->qty_distributed."</td>";
  echo "<td>".$row->qty_remaining."</td>";
  echo "<td>".$row->date_distributed."</td>";
  echo "<td>".$row->head_initials."</td>";
  //echo "<td>".<a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/distribute_items/' >" class="btn btn-primary">Edit</a>"</td>"

  echo "</tr>";
  $i++;
  }
   ?>
                </thead> 
          </table>            
</div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>