<link rel="stylesheet" href="<?php echo base_url(); ?>css/dashboard.css">

<section class="px-4 pt-5 mt-4 sec-main my-container">

    <div class="container py-4">


        <!-- Task Card -->
        <div class=" shadow-sm card-task p-3">
            <h4>List of Employees</h4>

            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Remark</th>
                    </tr>

                </thead>

                <tbody>
                    <tr>

                        <?php if (!empty($applications)) {foreach ($applications as $application) {?>

                    <tr>
                        <th scope="row"><?php echo $application['id'] ?></th>
                        <th scope="row"><?php echo $application['title'] ?></th>
                        <td><?php echo $application['date'] ?></td>
                        <td><?php echo $application['status_id'] ?></td>
                        <td><?php echo $application['remark'] ?></td>
                    </tr>


                    <?php }} ?>

                    </tr>

                </tbody>
            </table>
        </div>


    </div>


</section>