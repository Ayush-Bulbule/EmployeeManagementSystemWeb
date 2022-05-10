
<!doctype html>
<html lang="en">
  <head>
  <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/AllStyle.css');?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="{% static 'css/stylesheet.css'%}" type="text/css">
 <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <title>Department DSR</title>
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
  <center><font face="Tamoha" size="8px" color="black"><h1>Welcome to Departmental DSR</h1></font></center>
  </br>
  </br>
  </br>
  </br>

    <center>
        
    <div class="row">
        <div class="col-sm-4">
          <a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dept_view?dept=Computer';$_GET?>">
          <div class="card bg-dark text-white bg-opacity-40  " style="width: 30rem; display: inline-block" >
            <div class="card-body">
              <b><h3 class="card-title">Computer</h3></b>
          
            </div>
          </div>
        </a>
        </div>

    </br></br>
    
        <div class="col-sm-4">
          <a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dept_view?dept=IT';$_GET?>">
          <div class="card bg-dark text-white bg-opacity-40 " style="width: 30rem; display: inline-block" >
            <div class="card-body">
             <b><h3 class="card-title">IT</h3></b> 
         
            </div>
          </div>
          </a>
        </div>

        <div class="col-sm-4">
          <a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dept_view?dept=Mechanical';$_GET?>">
            <div class="card bg-dark text-white bg-opacity-40 " style="width: 30rem; display: inline-block" >
              <div class="card-body">
                <b><h3 class="card-title">Mechanical</h3></b>
                
              </div>
            </div>
            </a>
          </div>
      </div>
      
     

    </br>
      <div class="row">
      <div class="col-sm-4">
        <a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dept_view?dept=Civil';$_GET?>">
        <div class="card bg-dark text-white bg-opacity-40 " style="width: 30rem; display: inline-block" >
          <div class="card-body">
           <b><h3 class="card-title">Civil</h3></b> 
        
          </div>
        </div>
        </a>
      </div>
    
      <div class="col-sm-4">
        <a href="<?php echo base_url().'index.php/Dsr_controller/dept_view?dept=Electrical';$_GET?>">
        <div class="card bg-dark text-white bg-opacity-40 " style="width: 30rem; display: inline-block" >
          <div class="card-body">
            <b><h3 class="card-title">Electrical</h3></b>
          
          </div>
        </div>
      </a>
      </div>
      <div class="col-sm-4">
        <a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dept_view?dept=Electronics';$_GET?>">
          <div class="card bg-dark text-white bg-opacity-40 " style="width: 30rem; display: inline-block" >
            <div class="card-body">
             <b><h3 class="card-title">Electronics</h3></b> 
            
            </div>
          </div>
          </a>
        </div>
    </div>

</br>

    <div class="row">
        <div class="col-sm-4">
          <a href="<?php echo base_url().'index.php/Dsr_controller/dept_view?dept=Pharmacy';$_GET?>">
          <div class="card bg-dark text-white bg-opacity-40 " style="width: 30rem; display: inline-block" >
            <div class="card-body">
             <b><h3 class="card-title">Pharmacy</h3></b> 
             
            </div>
          </div>
          </a>
        </div>

        <div class="col-sm-4">
          <a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dept_view?dept=Chemical';$_GET?>">
          <div class="card bg-dark text-white bg-opacity-40 " style="width: 30rem; display: inline-block" >
            <div class="card-body">
            <b><h3 class="card-title">Chemical</h3></b>  
    
            </div>
          </div>
          </a>
        </div>

        <div class="col-sm-4">
          <a href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dept_view?dept=Plastic Polymer';$_GET?>">
            <div class="card bg-dark text-white bg-opacity-40 " style="width: 30rem; display: inline-block" >
              <div class="card-body">
               <b><h3 class="card-title">Plastic Polymer</h3></b> 
              
              </div>
            </div>
            </a>
          </div>
      </div>

     
    </center>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>
</html>