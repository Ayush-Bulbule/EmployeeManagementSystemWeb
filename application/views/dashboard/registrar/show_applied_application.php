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
                        <th scope="col">Type</th>
                        <th scope="col">Accept</th>
                        <th scope="col">Decline</th>

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
                        <td><?php echo $application['application_type'] ?></td>
                        <td>
                            <a href="<?php echo base_url() . 'Registrar/IoApplication/accept_io_application/' . $application['id'].  "/dummy remark" ?>"
                                style="font-size: 12px; border-radius: 5px" class="btn btn-primary"> Accept
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo base_url() . 'Registrar/IoApplication/decline_io_application/' . $application['id'] ."/dummy remark" ?>"
                                style="font-size: 12px;  border-radius: 5px"" class=" btn btn-danger">Decline</a>
                        </td>
                    </tr>


                    <?php }} ?>

                    </tr>

                </tbody>
            </table>
        </div>


    </div>


</section>