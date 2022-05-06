<!DOCTYPE html>
<html>
<head>
   <!--  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="<?php echo base_url('/assets/css/style.css');?>"  rel="stylesheet" />
</head>
<body>
    
    <div class="registration-form">
        
        <form action="" method="post"  enctype="multipart/formdata">
           <center><h3> ADD TRANSFER ITEM DETAILS </h3></center> </br>
            <!--<div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>-->
            <label>&nbsp &nbsp Product ID</label>
            <div class="form-group">
                <input type="text"  class="form-control item" name= "Product_ID" id="Product_ID" placeholder="Product ID" value="<?php echo $_GET['product_id'];?>" readonly>

            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name= "qty_transferr" id="qty_transferr" placeholder="Quantity To Be Transfered">
                <?php echo form_error('qty_distributed');?>

            </div>

            

            <div class="form-group">
                <input type="date" class="form-control item" name= "transfer_date" id="transfer_date" placeholder="Date of Distributed">
                <?php echo form_error('date_distributed');?>

            </div>



            <div class="form-group">
            <label>&nbsp &nbsp Transfer To</label>
                <select name="transfer_to" class="form-control item"  id="transfer_to">
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
                    <?php echo form_error('head_initials');?>

                  </select>

            </div>
            
            <div class="form-group">
            <label>&nbsp &nbsp Transfer From</label>
                <select name="transfer_from" class="form-control item"  id="transfer_from">
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
                    <?php echo form_error('head_initials');?>

                  </select>

            </div>
            <div class="form-group">
                <textarea type="text" class="form-control item" name= "msg" id="msg" placeholder="Message"></textarea>
                <?php echo form_error('msg');?>
            </div>
            
        <div class="form-group" 
>
                <input onclick="myFunction()" type="submit" id="submit" name="submit" class="btn btn-block create-account" value="Transfer">
        </div>
        
        </form>

        <script>
        function myFunction() {
            alert("Records Saved Successfully");
        }
        </script>
    
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src=<?php echo base_url("/assets/js/script.js");?>></script>
</body>
</html>