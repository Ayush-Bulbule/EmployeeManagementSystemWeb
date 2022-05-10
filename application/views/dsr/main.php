<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DSR Main Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico');?>" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('/assets/css/styles.css');?>"  rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Welcome to DeadStock Register</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Look out the inventories of Institute</p>
                       
                        
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Select DSR
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dsr_cs';?>">Central Store DSR</a></li>
                              <li><a class="dropdown-item" href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dept_dsr';?>">Department DSR</a></li>
                              <li><a class="dropdown-item" href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/hostel_dsr';?>">Hostels DSR</a></li>
                              <li><a class="dropdown-item" href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dept_view?dept=Library';$_GET?>">Library DSR</a></li>
                              <li><a class="dropdown-item" href="<?php echo base_url().'index.php/Dsr_controller_folder/Dsr_controller/dept_view?dept=Office';$_GET?>">Office DSR</a></li>
                              
                            </ul>
                          
                    </div>
                </div>
            </div>
        </header>
        
        
     
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>