<link rel="stylesheet" href="<?php echo base_url(); ?>css/leave.css">

<body>

<div class="fluid-container leave-page mt-5">
    <div class="card card-1">
        <div class="card-body">
            <h5 class="card-title">Leave Portal</h5>
            <h6 class="card-subtitle mb-2 text-muted ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" style="color: #6c757d ">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Leave</li>
                    </ol>
                </nav>
            </h6>
        </div>
    </div>

    <div class="card card-2">
        <div class="card-body">
            <h5 class="card-title">All Leave Applications</h5>
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>STAFF NAME</th>
                        <th>LEAVE TYPE</th>
                        <th>APPLIED DATE</th>
                        <th>HOD STATUS</th>
                        <th>REG. STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="profile">
                            <img class="profile-img" src="<?php echo base_url();?>./public/profile.png" alt="image">
                            <label class="profile-name">Bridget Gafa 1</label>
                        </td>
                        <td>Casual Leave</td>
                        <td>2021-05-21</td>
                        <td class="approved">Approved</td>
                        <td class="approved">Approved</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>




                    <?php foreach($result as $user): ?>
                        <tr>
                            <td><?php echo $user['sevarthID']?></td>
                            <td><?php echo $user['leave_id']?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>




                        <td class="profile">
                        <img class="profile-img" src="<?php echo base_url();?>./public/profile.png" alt="image">
                            <label class="profile-name">Bridget Gafa 2</label>
                        </td>
                        <td>Casual Leave</td>
                        <td>2021-05-21</td>
                        <td class="rejected">Rejected</td>
                        <td class="rejected">Rejected</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="profile">
                        <img class="profile-img" src="<?php echo base_url();?>./public/profile.png" alt="image">
                            <label class="profile-name">Bridget Gafa 3</label>
                        </td>
                        <td>Casual Leave</td>
                        <td>2021-05-21</td>
                        <td class="approved">Approved</td>
                        <td class="approved">Approved</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="profile">
                        <img class="profile-img" src="<?php echo base_url();?>./public/profile.png" alt="image">
                            <label class="profile-name">Bridget Gafa 4</label>
                        </td>
                        <td>Casual Leave</td>
                        <td>2021-05-21</td>
                        <td class="rejected">Rejected</td>
                        <td class="rejected">Rejected</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="profile">
                        <img class="profile-img" src="<?php echo base_url();?>./public/profile.png" alt="image">
                            <label class="profile-name">Bridget Gafa 5</label>
                        </td>
                        <td>Casual Leave</td>
                        <td>2021-05-21</td>
                        <td class="approved">Approved</td>
                        <td class="approved">Approved</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

</body>

<script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".leave-page")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })
    </script>

<script src="<?php echo base_url();?>js/leave.js"></script>