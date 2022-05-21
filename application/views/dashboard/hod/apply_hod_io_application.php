<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('css/main.css'); ?>">
</head>

<body>


    <div class="main">


        <div class="container">


            <?php

if ($this->session->flashdata('error')) {
    echo '
        <div class="container">
            <div class="alert alert-danger">
                ' . $this->session->flashdata("error") . '
            </div>
        </div>
        ';
}
?>



            <div class="signup-content">

                <?php
                    $attributes = array('role' => 'form');
                    echo form_open_multipart('Auth/ApplyIoApplication/add_hod_io_application');
                                    
                ?>
                <?php echo validation_errors(); ?>

                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">

                        <h2>Apply For Application</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="applicant_name">Applicant Name</label>
                                <input type="text" name="applicant_name" value="<?php echo set_value('applicant_name') ?>" id=" applicant_name"
                                    class="<?php echo (form_error('applicant_name') != "") ? 'is-invalid' : '' ?>" />
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('applicant_name')); ?></p>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="<?php echo set_value('title') ?>" id=" title"
                                    class="<?php echo (form_error('title') != "") ? 'is-invalid' : '' ?>" />
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('title')); ?></p>

                            </div>

                            <div class="form-group">
                        <label for="dept_id">Department</label>
                        <select class="form-select" name="dept_id" id="dept_id">
                            <?php if (!empty($dept)) {foreach ($dept as $departments) {?>

                            <option value="<?php echo $departments['dept_id'] ?>">
                                <?php echo $departments['dept_name'] ?></option>

                            <?php }} else {?>
                            <option value="">Select the Department</option>


                            <?php }?>
                        </select>
                    </div>

                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text"
                                class="form-input form-control textarea <?php echo (form_error('description') != "") ? 'is-invalid' : '' ?>"
                                name="description" value="<?php echo set_value('description') ?>" id="description"
                                placeholder="Description"></textarea>
                            <p class="invalid-feedback "><?php echo strip_tags(form_error('description')); ?></p>

                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="org_id">Date</label>
                                <input type='text' name='date' id='date' class='form-input form-control'  value="<?php echo date('d/m/y') ?>" disabled />

                                <p class="invalid-feedback "><?php echo strip_tags(form_error('date')); ?></p>


                            </div>
                            <!-- File Uploading -->
                            <div class="form-group">
                                <label for="application">SELECT PDF</label>
                                <?php echo form_open_multipart('Home/ApplyIoApplication/add_hod_io_application'); ?>

                                <input type="file" name="application" id="application"
                                    class="form-input form-control <?php echo (form_error('application') != "") ? 'is-invalid' : '' ?>"
                                    placeholder="">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('application')); ?>
                                </p>

                            </div>
                        </div>
                        <div class="form-radio">
                            <label for="application_type" class="radio-label">Select Application Type :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="application_type" value="1" id="inward" checked>
                                <label for="inward">Inward</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="application_type" value="2" id="outward">
                                <label for="outward">Outward</label>
                                <span class="check"></span>
                            </div>
                        </div>


                        <div class="form-submit">
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>