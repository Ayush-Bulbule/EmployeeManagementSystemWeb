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
							<li class="breadcrumb-item active" aria-current="page">Apply Leave</li>
						</ol>
					</nav>
				</h6>
			</div>
		</div>

		<div class="card card-2">
			<div class="card-body">
				<h5 class="card-title">Staff form</h5>
				<form method="post" action="<?php echo base_url('post_apply_leave') ?>">
					<section>
						<div class="row px-3">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Sevarth ID </label>
									<?php
									if (isset($employees_details)) {
									?>
										<input name="sevarth_id" type="text" class="form-control wizard-required mt-3 mb-3" autocomplete="off" readonly value="<?php echo ($employees_details['sevarth_id']); ?>">
								</div>

							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Fullname </label>
									<input name="full_name" type="text" class="form-control wizard-required mt-3 mb-3" readonly autocomplete="off" value="<?php echo ($employees_details['first_name']); ?> <?php echo ($employees_details['middle_name']); ?> <?php echo ($employees_details['last_name']); ?> ">
								</div>

							</div>
						</div>

					<?php

									}
					?>

					<div class="row  px-3">
						<!-- <div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>Available Leave Days </label>
							<?php
							//if (isset($leave_types)) {
							//foreach ($leave_types as $key) {
							?>
									<input name="leave_days" type="text" class="form-control mt-3 mb-3"  autocomplete="off" readonly value="<?php echo ($key['total_leaves']); ?>">

							<?php
							//	}
							//}
							?>

						</div>
					</div> -->

						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Leave Type :</label>
								<select id="leave_types" name="leave_type" class="custom-select form-control mt-3 mb-3" autocomplete="off">
									<option value="">Select leave type...</option>
									<?php
									if (isset($leave_types)) {
										foreach ($leave_types as $key) {
									?>
											<option value="<?php echo ($key['leave_type']); ?>"><?php echo ($key['leave_type']); ?></option>
									<?php
										}
									}
									?>
								</select>
							</div>
						</div>
					</div>

					<div class="row  px-3">
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Start Leave Date :</label>
								<input id="start_date" name="start_date" type="date" class="form-control date-picker mt-3 mb-3" autocomplete="off">
							</div>
						</div>

						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>End Leave Date :</label>
								<input id="end_date" name="end_date" type="date" class="form-control date-picker mt-3 mb-3" autocomplete="off">
							</div>
						</div>
					</div>

			</div>

			<!-- <div class="row  px-3">
			<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>Total Days:</label>
							<input id="total_days" name="total_days" type="text" class="form-control date-picker mt-3 mb-3" readonly  autocomplete="off">
						</div>
					</div>	 -->



			<div class="row  px-3">
				<div class="col-md-6 col-sm-12">
					<div class="form-group">
						<label>Reason For Leave :</label>
						<textarea id="leave_reason" name="leave_reason" class="form-control mt-3 mb-3" length="200" maxlength="250" autocomplete="off" style="resize:none; height:10rem"></textarea>
					</div>

					<div class="form-group">
						<div class="justify-content-center">
							<div class="dropdown">
								<input class="btn btn-primary mt-3 mb-3" type="submit" value="APPLY LEAVE" name="submit" id="add">
							</div>
						</div>
					</div>
				</div>
				</section>
				</form>
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
	});
</script>