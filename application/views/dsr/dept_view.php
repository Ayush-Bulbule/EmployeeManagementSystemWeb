
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
          </br>
     <div><table align = "left">
<td><a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/';?>" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true">Back</a></td>
<td><td>
        <td><td>
        <td><td>
</table>
</div>
    </br>
          </br>
<div><table align = "right">
<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Request Product</button></td>
<td><td>
        <td><td>
        <td><td>
        <td><td>
</table></div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" enctype="multipart/formdata">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">From:</label>
            <input class="form-control" name="msg_from" id="msg_from" ></input>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <select name="msg_to" id="msg_to" class="form-control item"  id="msg_to">
                    <option value="select">--select--</option>
                    <option value="computer">Computer</option>
                    <option value="civil">Civil</option>
                    <option value="electrical">Electrical</option>
                    <option value="electronics">Electronics</option>
                    <option value="mechanical">Mechanical</option>
                    <option value="IT">IT</option>
                    <option value="pharmacy">Pharmacy</option>
                    <option value="chemical">Chemical</option>
                    <option value="plastic_polymer">Plastic Polymer</option>
                    <option value="girls_hostel1">Girls Hostel</option>
                    <option value="boys_hostel">Boys Hostel</option>
                    <option value="office">Office</option>
                    <option value="library">Library</option>

                  </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" name="message" id="message"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Details:</label>
            <textarea class="form-control" name="view_details" id="view_details"></textarea>
          </div>

          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" value="submit" name="submit" id="submit">Send Request</button>
      </div>
      </form>
    </div>
  </div>
</div>



</br>
            <div class="container"> 
               <center> <h1><?php 
               
               if(isset($_GET['dept'])): 
               $d = $_GET['dept']; 
               echo "Welcome to " . $d . " DSR"; 
               endif; 
               ?></h1> </center>
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
                        <th scope="col">Transfer</th>
                    </tr>

                    <?php
  $i=1;
  foreach($data as $row)
  {
 
 //echo "<td>".$row->Product_ID."</td>";
  $a=$row->Product_ID;
  echo "<td>".$a."</td>";
  echo "<td>".$row->qty_distributed."</td>";
  echo "<td>".$row->qty_remaining."</td>";
  echo "<td>".$row->date_distributed."</td>";
  echo "<td>".$row->head_initials."</td>";
  ?>
  <td><a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/transfer_items?product_id='.$a.'';$_GET?>" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true">TRANSFER</a></td>
  
  <?php

  echo "</tr>";
  $i++;
  }
?> 

                </thead> 
</div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>