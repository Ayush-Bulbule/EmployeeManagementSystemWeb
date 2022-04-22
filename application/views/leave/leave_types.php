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
						<div
							class="card-box pd-30 pt-10 height-100-p pd-20 card-box mb-30 shadow p-3 mb-5 bg-body rounded">
							<h2 class="mb-30 h4">New Leave Type</h2>
							<section>
								<form name="save" method="post">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="mt-3 mb-3">Leave Type</label>
												<input name="leavetype" type="text" class="form-control mt-3 mb-3"
													required="true" autocomplete="off">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Leave Description</label>
												<textarea name="description" style="height: 5em;"
													class="form-control text_area mt-3 mb-3" type="text"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Start Date</label>
												<input name="date_from" class="form-control mt-3 mb-3" type="date">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>End Date</label>
												<input name="date_to" class="form-control mt-3 mb-3" type="date">
											</div>
										</div>
									</div>

									<div class="col-sm-12 text-right">
										<div class="dropdown">
											<input class="btn btn-primary mt-3 mb-3" type="submit" value="REGISTER"
												name="add" id="add">
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>

					<div class="col-lg-8 col-md-6 col-sm-12 mb-30 h-100">
						<div class="card-box mb-30 shadow p-3 mb-5 bg-body rounded" style="overflow-x: scroll">
							<h2 class="mb-30 h4">Leave Type List</h2>
							<div class="pb-20">
								<table class="data-table table stripe hover nowrap">
									<thead>
										<tr>
											<th class="table-plus">LEAVETYPE</th>
											<th class="table-plus">DESCRIPTION</th>
											<th table-plus>DATE RANGE</th>
											<th class="datatable-nosort">ACTION</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td> Casual Leave </td>
											<td>Casual </td>
											<td>20/03/2022 - 19/03/2023 </td>
											<td>
												<button type="button" class="btn"><i class="far fa-eye"></i></button>
              									<button type="button" class="btn"><i class="fas fa-edit"></i></button>
            									<button type="button" class="btn"><i class="far fa-trash-alt"></i></button>	
											</td>
										</tr>

										<tr>
											<td> Casual Leave </td>
											<td>Casual </td>
											<td>20/03/2022 - 19/03/2023 </td>
											<td>
												<button type="button" class="btn"><i class="far fa-eye"></i></button>
              									<button type="button" class="btn"><i class="fas fa-edit"></i></button>
            									<button type="button" class="btn"><i class="far fa-trash-alt"></i></button>
											</td>
										</tr>
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


</body>

</html>