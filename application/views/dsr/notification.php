<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Notification</title>
  </head>
  <body>
</br>
  
    <div class=" shadow-sm card-task p-3">
      <center> <h4>Notifications</h4></center>
</br>
      <table class="table">
          <thead>
              <tr>
                  <th scope="col">Sr</th>
                  <th scope="col">Message</th>
                  <th scope="col">Message From</th>
                  <th scope="col">View Details</th>
              </tr>

              <?php
  $i=1;
  foreach($data as $row)
  {
  $srNO = $row->sr_no;
  echo "<td>".$srNO."</td>";
  $msg = $row->message;
  echo "<td>".$msg."</td>";
  $msgFrom = $row->msg_from;
  echo "<td>".$msgFrom."</td>";
  $msgto = $row->msg_to;
  $details = $row->view_details;

 
  //echo "<td>".<a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/distribute_items/' >" class="btn btn-primary">Edit</a>"</td>"
?>
     
              
           
                  
                  
             <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" name="details" id="details">View Details</button></td>
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <center> <h5 class="modal-title" id="exampleModalLabel">Notification Details</h5></center>
                         
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                          <div class="form-group">
                              <label for="recipient-name" class="col-form-label">From:</label>
                              <input class="form-control" id="message-text" value ="<?php echo $msgFrom ?>" readonly>
                            </div>
                            
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <input class="form-control" id="message-text" value = "<?php echo $msg ?>" readonly>
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Details:</label>
                              <input class="form-control" id="message-text" value="<?php echo $details ?>" readonly>
                            </div>

                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </td>
     
        <?php 
  echo "</tr>";
  $i++;
  }
   ?> 
      </table>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>