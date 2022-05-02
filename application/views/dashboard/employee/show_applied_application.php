<link rel="stylesheet" href="<?php echo base_url(); ?>css/dashboard.css">

<section class="px-4 pt-5 mt-4 sec-main my-container">

    <div class="container py-4">


        <!-- Task Card -->
        <div class=" shadow-sm card-task p-3">
            <h4>List of Employees</h4>

            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Remark</th>
                    </tr>

                </thead>

                <tbody>
                    <tr>
                        
                        <?php if (!empty($applications)) {foreach ($employee_for_verification_from_hod as $employees) {?>

                        <th scope="row"><?php echo $employees['name'] ?></th>
                        <td><?php echo $employees['date'] ?></td>
                        <td><?php echo $employees['status'] ?></td>
                        <td><?php echo $employees['remark'] ?></td>

                       

                        <?php }} ?>

                    </tr>

                </tbody>
            </table>
        </div>


    </div>


</section>