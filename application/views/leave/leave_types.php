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
							<li class="breadcrumb-item active" aria-current="page">Leave Types</li>
						</ol>
					</nav>
				</h6>
			</div>
		</div>

		<div class="">
			<div class="card-body px-3 py-3">

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 pt-10 height-100-p pd-20 card-box mb-30 shadow p-3 mb-5 bg-body rounded">
							<h2 class="mb-30 h4">New Leave Type</h2>
							<section>
								<form name="save" method="post" action="<?php echo base_url('post_leave') ?>">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="mt-3 mb-3">Leave Type</label>
												<input name="leave_type" type="text" class="form-control mt-3 mb-3" required="true" autocomplete="off">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Leave Description</label>
												<textarea name="leave_description" style="height: 5em;" class="form-control text_area mt-3 mb-3" type="text"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Total leaves</label>
												<input name="total_leaves" class="form-control text_area mt-3 mb-3" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Start Date</label>
												<input name="start_date" class="form-control mt-3 mb-3" type="date">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>End Date</label>
												<input name="end_date" class="form-control mt-3 mb-3" type="date">
											</div>
										</div>
									</div>

									<div class="col-sm-12 text-right">
										<div class="dropdown">
											<input class="btn btn-primary mt-3 mb-3" type="submit" value="REGISTER" name="submit" id="add">
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>

					<div class="col-lg-8 col-md-6 col-sm-12 mb-30 h-100">
						<div class="card-box mb-30 shadow p-3 mb-5 bg-body rounded" style="overflow-x: scroll; overflow-y: scroll">
							<h2 class="mb-30 h4">Leave Type List</h2>
							<div class="pb-20">
								<table id="example" class="data-table table table-hover table-striped hover nowrap">
									<thead>
										<tr>
											<th class="table-plus">ID</th>
											<th class="table-plus">LEAVE TYPE</th>
											<th class="table-plus">DESCRIPTION</th>
											<th table-plus>DATE RANGE</th>
											<th class="datatable-nosort">TOTAL LEAVES</th>
											<th class="datatable-nosort">ACTION</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if (isset($leave_types)) {
											foreach ($leave_types as $key) {
										?>
												<tr>
													<td><?php echo ($key['leave_id']); ?></td>
													<td><?php echo ($key['leave_type']); ?></td>
													<td><?php echo ($key['leave_description']); ?> </td>
													<td><?php echo ($key['start_date']); ?> -> <?php echo ($key['end_date']); ?> </td>
													<td style="text-align: center;"><?php echo ($key['total_leaves']); ?></td>
													<td>
														<!-- <button type="button" class="btn"><i class="far fa-eye"></i></button> -->
														<!-- <button name=""type="button" class="btn"><i class="fas fa-edit"></i></button> -->
														<a href="<?php echo base_url('leave_type/delete/' . $key['leave_id']); ?>" name="delete" class="btn"><i class="far fa-trash-alt"></i>
													</td>
												</tr>
										<?php
											}
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>



<!-- js -->
<script>
	var menu_btn = document.querySelector("#menu-btn")
	var sidebar = document.querySelector("#sidebar")
	var container = document.querySelector(".leave-page")
	menu_btn.addEventListener("click", () => {
		sidebar.classList.toggle("active-nav")
		container.classList.toggle("active-cont")
	})
</script>
<script src="<?php echo base_url(); ?>js/leave.js"></script>
