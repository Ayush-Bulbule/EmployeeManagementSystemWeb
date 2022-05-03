<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>


    <div class="main">


        <div class="container">

            <h2>hello</h2>
            <h2>hello</h2>
            <h2>hello</h2>
            <?php

if ($this->session->flashdata('msg')) {
    echo '
        <div class="container">
            <div class="alert alert-danger">
                ' . $this->session->flashdata("msg") . '
            </div>
        </div>
        ';
}
?>


            <div class="signup-content">


                <div class="signup-form">
                    <form method="POST" action="<?php echo base_url() . 'Home/ApplyIoApplication/add_io_application' ?>"
                        class="register-form" id="register-form">

                        <h2>hello</h2>
                        <h2>Apply For Application</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="<?php echo set_value('title') ?>" id=" title"
                                    class="<?php echo (form_error('title') != "") ? 'is-invalid' : '' ?>" />
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('title')); ?></p>

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
                                <input type="date" name="date" id="date" value="<?php echo set_value('date'); ?>"
                                    class="form-input form-control <?php echo (form_error('date') != "") ? 'is-invalid' : '' ?>"
                                    placeholder="date">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('date')); ?></p>


                            </div>
                            <div class="form-group">
                                <label for="application">SELECT PDF</label>
                                <input type="file" name="application" id="application"
                                    value="<?php echo set_value('application'); ?>"
                                    class="form-input form-control <?php echo (form_error('application') != "") ? 'is-invalid' : '' ?>"
                                    placeholder="">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('application')); ?>
                                </p>

                            </div>
                        </div>
                        <div class="form-radio">
                            <label for="application_type" class="radio-label">Select Application Type :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="application_type" id="inward" checked>
                                <label for="inward">Inward</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="application_type" id="outward">
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