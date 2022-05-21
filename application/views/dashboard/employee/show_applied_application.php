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
                        <th scope="col">Subject</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Remark</th>
                        <th scope="col">Description</th>
                    </tr>

                </thead>

                <tbody>
                    <tr>

                        <?php if (!empty($applications)) {foreach ($applications as $application) {?>

                    <tr>
                        <th scope="row"><?php echo $application['id'] ?></th>
                        <th scope="row"><?php echo $application['title'] ?></th>
                        <td><?php echo $application['date'] ?></td>
                        <td>
                            <?php 
                            if($application['status_id']==1)
                            {
                            echo 'APPLIED';
                            }else if($application['status_id']==2)
                            {
                                echo 'APPROVED BY HOD';
                            }else if($application['status_id']==3)
                            {
                                echo 'APPROVED BY REGISTRAR';
                            }else if($application['status_id']==4)
                            {
                                echo 'APPROVED BY PRINCIPAL';
                            }else if($application['status_id']==5)
                            {
                                echo 'Declined By Hod';
                            }else if($application['status_id']==6)
                            {
                                echo 'Declined By Registrar';
                            }else if($application['status_id']==7)
                            {
                                echo 'Declined By Principle';
                            }
                            ?>
                        </td>                        <td><?php echo $application['remark'] ?></td>
                        <td><?php echo $application['description'] ?></td>
                    </tr>


                    <?php }} ?>

                    </tr>

                </tbody>
            </table>
        </div>


    </div>


</section>