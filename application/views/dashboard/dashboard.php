<link rel="stylesheet" href="<?php echo base_url(); ?>css/dashboard.css">

<section class="px-4 pt-5 mt-4 sec-main my-container">

    <div class="container py-4">
        <div class="top-box py-3">
            <h5>Home</h5>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb px-3">
                    <li class="breadcrumb-item"><a href="index.php" style="color:#6c757d">Dashboard/</a></li>
                </ol>
            </nav>
        </div>
        <!-- Welcome Card -->
        <div class="card my-3 mx-lg-5 px-lg-4 shadow py-2" style="">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>/public/banner-img.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title">Welcome Ayush</h2>
                        <p class="card-text">Use menu to navigate towards various modules using the nav icon in top
                            navbar.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stats Card -->
        <div class="row mt-5">
            <!-- Card 1 -->
            <div class="col-md-4 col-xl-3 col-sm-6">
                <div class="bg-c-blue card p-3 shadow-sm text-light order-card">
                    <h6 class="mb-20">Total Employees</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="fas fa-users fs-3"></i>
                        <h2 class="text-white">12</h2>
                    </div>
                    <p class="mb-0">12 min ago</p>
                </div>
            </div>
            <div class="col-md-4 col-xl-3 col-sm-6">
                <div class="bg-c-green card p-3 shadow-sm text-light order-card">
                    <h6 class="mb-20">Remaining Leave Days</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="fa fa-calendar"></i>
                        <h2 class="text-white">15</h2>
                    </div>
                    <p class="mb-0">Total leaves: 4</p>
                </div>
            </div>
            <div class="col-md-4 col-xl-3 col-sm-6">
                <div class="bg-c-yellow card p-3 shadow-sm text-light order-card">
                    <h6 class="mb-20">Notifications</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="fa fa-bell fs-3"></i>
                        <h2 class="text-white">04</h2>
                    </div>
                    <p class="mb-0">Message from HOD</p>
                </div>
            </div>
            <div class="col-md-4 col-xl-3 col-sm-6">
                <div class="bg-c-pink card p-3 shadow-sm text-light order-card">
                    <h6 class="mb-20">Applied Trainings</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="fa fa-graduation-cap fs-3"></i>
                        <h2 class="text-white">03</h2>
                    </div>
                    <p class="mb-0">Approved: 02</p>
                </div>
            </div>
        </div>

        <!-- Task Card -->
        <div class=" shadow-sm card-task p-3">
            <h4>Tasks and Notifications</h4>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sr</th>
                        <th scope="col">Task</th>
                        <th scope="col">AssignTo</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Organise the engineers day program in campus</td>
                        <td>Me</td>
                        <td><span class="badge bg-warning">Yet to Approve</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>approval for Updation of college website</td>
                        <td>Me</td>
                        <td><span class="badge bg-warning">Yet to Approve</span></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Approve the leave of Mr. Kanitkar</td>
                        <td>Me</td>
                        <td><span class="badge bg-success">Compleated</span></td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>

    <h3 class="text-center py-2 bg-white mt-5">
        About Employee Management System
    </h3>
    <div class="row">
        <div class="col-lg-5 col-sm-10 mx-sm-auto ps-lg-4 py-md-4">
            <img src="<?php echo base_url() ?>/public/gpa.jpg" alt="GPAMRAVATI" class="img-fluid">
        </div>
        <div class="col-lg-7 col-sm-12 p-4 ">
            <p class="fs-5 pe-4">
                Employee Management System is a web based application which is developed to manage the
                employees of the college. It is developed by the students of the Computer Engineering Department,
                Government Polytechnic,Amravati.
                This system is able to manage different types of employees like principal, hod, faculty and other
                college employees.
            </p>
        </div>
    </div>
</section>