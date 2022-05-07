<!DOCTYPE html>
<html>
<head>
   <!--  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>">
</head>
<body>
    
    <div class="registration-form">
        
        <form method="post" action="" enctype="multipart/formdata">
           <center><h3> ADD PRODUCT DETAILS </h3></center> </br>
            <!--<div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>-->
            <div class="form-group">
                <input type="text" class="form-control item" name="Oraganization_ID" id="Oraganization_ID" placeholder="Organization ID">
                <?php echo form_error('Oraganization_ID');?>

            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="DSR_no" id="DSR_no" placeholder="DSR No.">
                <?php echo form_error('DSR_no');?>

            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="Product_ID" id="Product_ID" placeholder="Product ID">
                <?php echo form_error('Product_ID');?>

            </div>
            <div class="form-group">
                <input type="date" class="form-control item" name="purchase_date" id="purchase_date" placeholder="Purchase Date">
                <?php echo form_error('purchase_date');?>

            </div>
           
            <div class="form-group">
            <label>&nbsp &nbsp Choose Authority</label>
                      <select  class="form-control item" name="purchase_authority" id="purchase_authority" placeholder="Choose Authority" >
                      <option value="select">--select--</option>
                      <option value="Principal">Principal</option>
                        <option value="DTE">DTE</option>
                        <option value="JD">JD</option>
                      </select>
                      <?php echo form_error('purchase_authority');?>

            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="supplier_name" id="supplier_name" placeholder="Supplier Name">
                <?php echo form_error('supplier_name');?>

            </div>

            <div class="form-group">
                <textarea class="form-control item" name="Supplier_Address" id="Supplier_Address" placeholder="Supplier Address" name="supp_addr" rows="2" cols="50"></textarea>
                <?php echo form_error('Supplier_Address');?>

            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="product_name" id="product_name" placeholder="Product Name">
                <?php echo form_error('product_name');?>

            </div>

            <div class="form-group">
                <textarea class="form-control item" name="product_desc" id="product_desc" placeholder="Product Discription" name="product_desc" rows="2" cols="50"></textarea>
                <?php echo form_error('product_desc');?>

            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="qty"  id="qty" placeholder="Quantity">
                <?php echo form_error('qty');?>

            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="Price_Per_Quantity" id="Price_Per_Quantity" placeholder="Price Per Quantity">
                <?php echo form_error('Price_Per_Quantity');?>

            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="price" id="price" placeholder="Total Price">
                <?php echo form_error('price');?>

            </div>

            <div class="form-group">
            <label>&nbsp &nbsp Initial of HOD</label>
                <select name="initial_HOD" class="form-control item" name="initial_HOD" id="initial_HOD" placeholder="Initial Of HOD">
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
                  <?php echo form_error('initial_HOD');?>

            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="Quantity_Distributed" id="Quantity_Distributed" placeholder="Quantity Distributed">
                <?php echo form_error('Quantity_Distributed');?>

            </div>

            

            <div class="form-group">
                <input type="text" class="form-control item" name="qty_remaining" id="qty_remaining" placeholder="Quantity Remaining">
                <?php echo form_error('qty_remaining');?>

            </div>

            <div class="form-group">
                <textarea class="form-control item" name="remarks" id="remarks" placeholder="Remarks" name="product_desc" rows="2" cols="50"></textarea>

            </div>

             <div class="form-group">
                <button type="submit" value="submit" id="submit" name="submit" class="btn btn-block create-account">Submit</button>
            </div>
            </form>
    <!-- 
        
        <div class="social-media">
            <h5>Sign up with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
    -->
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
