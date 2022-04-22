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
			<h5 class="card-title">Staff form</h5>
			<form method="post" action="">
				<section>

					<div class="row px-3">
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>First Name </label>
								<input name="firstname" type="text" class="form-control wizard-required mt-3 mb-3"
									required="true" readonly autocomplete="off" value="firstname">
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Last Name </label>
								<input name="lastname" type="text" class="form-control mt-3 mb-3" readonly
									required="true" autocomplete="off" value="LastName">
							</div>
						</div>
					</div>

					<div class="row  px-3">

						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Email Address</label>
								<input name="email" type="text" class="form-control mt-3 mb-3" required="true"
									autocomplete="off" readonly value="EmailId">
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Available Leave Days </label>
								<input name="leave_days" type="text" class="form-control mt-3 mb-3" required="true"
									autocomplete="off" readonly value="Av_leave">
							</div>
						</div>

					</div>

					<div class="row  px-3">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>Leave Type :</label>
								<select name="leave_type" class="custom-select form-control mt-3 mb-3" required="true"
									autocomplete="off">
									<option value="">Select leave type...</option>
								</select>

							</div>
						</div>
					</div>

					<div class="row  px-3">
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Start Leave Date :</label>
								<input name="date_from" type="date" class="form-control date-picker mt-3 mb-3"
									required="true" autocomplete="off">
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>End Leave Date :</label>
								<input name="date_to" type="date" class="form-control date-picker mt-3 mb-3"
									required="true" autocomplete="off">
							</div>
						</div>
					</div>

					<div class="row  px-3">
						<div class="col-md-8 col-sm-12">
							<div class="form-group">
								<label>Reason For Leave :</label>
								<textarea id="textarea1" name="description" class="form-control mt-3 mb-3" required
									length="150" maxlength="150" required="true" autocomplete="off"
									style="resize:none; height:10rem"></textarea>
							</div>
						</div>
					</div>

					<div class="row  px-3">
						<div class="col-md-4 col-sm-12">
							<div class="form-group">
								<div class="justify-content-center">
									<button type="submit" class="btn apply-btn mt-3 mb-3" name="apply" id="apply" style="
												background-color: #524d7d;
    											border-color: #524d7d;
												color:white;
												font-weight: 500;
												font-size: 1rem;">Apply Leave</button>
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
	})
</script>