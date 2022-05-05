<link rel="stylesheet" href="<?php echo base_url(); ?>css/dashboard.css">

<section class="px-4 pt-5 mt-4 sec-main my-container">

    <div class="container py-4">

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
        <!-- Task Card -->
        <div class=" shadow-sm card-task p-3">
            <h4>List of Employees</h4>

            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Application</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Type</th>
                        <th scope="col">Accept</th>
                        <th scope="col">Decline</th>

                        <th scope="col">Remark</th>

                    </tr>

                </thead>

                <tbody>
                    <form action="<?php echo base_url() . 'Hod/IoApplication/add_remark' ?>" method="post">
                    <tr>

                        <?php if (!empty($applications)) {foreach ($applications as $application) {?>

                    <tr>
                        <th scope="row"><input type="text" name="application_id" id="application_id" disabled value="<?php echo $application['id'] ?>"></th>
                        <th scope="row"><?php echo $application['title'] ?></th>

                        <th scope="row">
                            <a href="#" style="font-size: 12px; border-radius: 5px" class="btn btn-success"> View
                            </a>
                        </th>

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
                        </td>

                        <td>
                            <?php 
                            if($application['application_type'] ==1 )
                            {
                                echo 'INWARD';
                            }else{
                                echo 'OUTWARD';
                            }
                            ?>
                        </td>
                        <td>
                            <a href="
                            <?php 
 echo base_url() . 'Hod/IoApplication/accept_io_application/' . $application['id']
                            ?>"
                                style="font-size: 12px; border-radius: 5px"  class="btn btn-primary"> Accept
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo base_url() . 'Hod/IoApplication/decline_io_application/' . $application['id']  ?>"
                                style="font-size: 12px;  border-radius: 5px"" class=" btn btn-danger">Decline</a>
                        </td>
                        <td><input type="text" name="remark" id="remark" class="form-input form-control "
                                placeholder=""></td>
                    </tr>


                    <?php }} ?>

                    </tr>
                    </form>
                </tbody>
            </table>
        </div>


    </div>


</section>