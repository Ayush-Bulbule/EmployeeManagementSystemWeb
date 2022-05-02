<!DOCTYPE html>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/register.css">

<body>




    <div class="main">


        <section class="signup">
            <?php


        if ($this->session->flashdata('msg')) {
            echo '
                            <div class="containegit r">
                            <div class="alert alert-danger">
                                ' . $this->session->flashdata("msg") . '
                            </div>
                            </div>
                            ';
        }
        ?>

            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container container_new">


                <div class="signup-content">
                    <h2 class="text-center">Registraion Form</h2>
                    <form action="<?php echo base_url().'index.php/Auth/RegisterController/register'?>" name="mainForm"
                        id="mainForm signupform" class="signupform" method="post">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="sevarth_id">Sevarth ID</label>
                                <input type="text" name="sevarth_id" id="sevarth_id"
                                    value="<?php echo set_value('sevarth_id'); ?>"
                                    class="form-input form-control <?php echo (form_error('sevarth_id') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="Sevarth ID">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('sevarth_id')); ?></p>

                            </div>

                            <div class="form-group">
                                <label for="org_id">Organization</label>
                                <select class="form-select" name="org_id" id="org_id">
                                    <?php if (!empty($events)) {foreach ($events as $organization) {?>

                                    <option value="<?php echo $organization['org_id'] ?>">
                                        <?php echo $organization['org_name'] ?></option>

                                    <?php }} else {?>
                                    <option value="">Record Not Found</option>


                                    <?php }?>
                                </select>
                            </div>


                        </div>
                        <div class="form-row">
                            <!-- key -->
                            <div class="form-group">
                                <label for="key">Auth Key</label>
                                <input type="text" name="key" id="key" value="<?php echo set_value('key'); ?>"
                                    class="form-input form-control <?php echo (form_error('key') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="key">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('key')); ?></p>

                            </div>

                            <!-- Name -->
                            <div class="form-group">
                                <label for="name">Employee Name</label>
                                <input type="text" name="name" id="name" value="<?php echo set_value('name'); ?>"
                                    class="form-input form-control <?php echo (form_error('name') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="Name">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('name')); ?></p>

                            </div>
                        </div>



                </div>

                <div class="form-row">
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

                    <div class="form-group">
                        <label for="role_id">Role</label>
                        <select class="form-select" name="role_id" id="role_id">
                            <?php if (!empty($role)) {foreach ($role as $role) {?>

                            <option value="<?php echo $role['role_id'] ?>"><?php echo $role['role_name'] ?></option>

                            <?php }} else {?>
                            <option value="">Select the Role</option>


                            <?php }?>

                        </select>

                    </div>


                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>"
                            class="form-input form-control <?php echo (form_error('email') !=  "") ? 'is-invalid' : '' ?>"
                            placeholder="Email">
                        <p class="invalid-feedback "><?php echo strip_tags(form_error('email')); ?></p>

                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"
                            value="<?php echo set_value('password'); ?>"
                            class="form-input form-control <?php echo (form_error('password') !=  "") ? 'is-invalid' : '' ?>"
                            placeholder="Password">
                        <p class="invalid-feedback "><?php echo strip_tags(form_error('password')); ?></p>

                    </div>


                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="hint_question">Hint Question (In case you forget the password)</label>
                        <input type="text" name="hint_question" id="hint_question"
                            value="<?php echo set_value('hint_question'); ?>"
                            class="form-input form-control text-uppercase <?php echo (form_error('hint_question') !=  "") ? 'is-invalid' : '' ?>"
                            placeholder="Enter the question">
                        <p class="invalid-feedback "><?php echo strip_tags(form_error('hint_question')); ?></p>

                    </div>

                    <div class="form-group">
                        <label for="hint_answer">Answer (enter the answer which you can remember)</label>
                        <input type="text" name="hint_answer" id="hint_answer"
                            value="<?php echo set_value('hint_answer'); ?>"
                            class="form-input form-control text-uppercase <?php echo (form_error('hint_answer') !=  "") ? 'is-invalid' : '' ?>"
                            placeholder="Enter the answer">
                        <p class="invalid-feedback "><?php echo strip_tags(form_error('hint_answer')); ?></p>

                    </div>


                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Submit" />
                    </div>

                </div>
                <div class="mt-3 text-center form-check">
                    <span>Already have account? <a href="login" class="link-fp text-danger">Log in</a></span>
                </div>
                </form>

            </div>
        </section>




</body>

</html>