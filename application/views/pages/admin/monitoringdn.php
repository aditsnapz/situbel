<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Tugas Belajar Dalam Negeri</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Log Pembayaran</a></li>
						<li class="breadcrumb-item active">Living Cost</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<br>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card card-danger card-tabs">
						<div class="card-header p-0 pt-1">
							<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link <?= $category == 'profile' ?'active':''?>"
										id="custom-tabs-one-home-tab"
										href="<?= base_url('admin/monitoringdn/').$users_id ?>" role="tab"
										aria-controls="custom-tabs-one-home" aria-selected="true">Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?= $category == 'livingcost' ?'active':''?>"
										id="custom-tabs-one-home-tab"
										href="<?= base_url('admin/tubeldn/livingcost/').$users_id ?>" role="tab"
										aria-controls="custom-tabs-one-home" aria-selected="true">Living Cost</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?= $category == 'tuitionfee' ?'active':''?>"
										id="custom-tabs-one-profile-tab"
										href="<?= base_url('admin/tubeldn/tuitionfee/').$users_id ?>" role="tab"
										aria-controls="custom-tabs-one-profile" aria-selected="false">Tuition Fee</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?= $category == 'pembayaran' ?'active':''?>"
										id="custom-tabs-one-messages-tab"
										href="<?= base_url('admin/tubeldn/pembayaran/').$users_id ?>" role="tab"
										aria-controls="custom-tabs-one-messages" aria-selected="false">Pembayaran</a>
								</li>

							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content" id="custom-tabs-one-tabContent">
								<div class="tab-pane fade <?= $category == 'profile' ?'show active':''?>"
									id="custom-tabs-one-profile" role="tabpanel"
									aria-labelledby="custom-tabs-one-profile-tab">

								</div>
								<div class="tab-pane fade  <?= $category == 'livingcost' ?'show active':''?>"
									id="custom-tabs-one-home" role="tabpanel"
									aria-labelledby="custom-tabs-one-home-tab">
									<table class="table table-striped table-bordered table-hover dataku">
										<thead class="atas">
											<tr>
												<th width="5%">ID</th>
												<th width="15%">Nama</th>
												<th width="15%">Semester</th>
												<th width="10%">Nominal</th>
												<th width="10%">Status</th>
												<th width="10%">Status Bayar</td>
												<th width="10%">Dibuat</td>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no=1;
											foreach ($reports as $report) {
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $report->nama; ?></td>
												<td><?php echo $report->semester; ?></td>
												<td><?php echo $report->nominal; ?></td>
												<td><?php echo $report->status; ?></td>
												<td><?php echo $report->status_bayar; ?></td>
												<td><?php echo $report->created_at; ?></td>
												<td>
													<a class="btn btn-warning btn-sm"
														href="<?= base_url("admin/monitoringdn/").$report->id ?>"><i
															class="fa fa-desktop "></i></a>&nbsp&nbsp
													<button type="button" class="btn btn-sm btn-primary"
														data-toggle="modal"
														data-target="#edit-report<?php echo $report->id;?>"><i
															class="fa fa-user"></i></button>&nbsp&nbsp
													<a class="btn btn-danger btn-sm delete-link"
														href="<?= base_url('User/delete/'.$report->id);?>"><i
															class="fa fa-trash "></i></a>

												</td>
											</tr>
											<?php $no++; } ?>

										</tbody>


									</table>
								</div>
								<div class="tab-pane fade <?= $category == 'tuitionfee' ?'show active':''?>"
									id="custom-tabs-one-profile" role="tabpanel"
									aria-labelledby="custom-tabs-one-profile-tab">
									<table class="table table-striped table-bordered table-hover dataku">
										<thead class="atas">
											<tr>
												<th width="5%">ID</th>
												<th width="15%">Nama</th>
												<th width="15%">Semester</th>
												<th width="10%">Nominal</th>
												<th width="10%">Status</th>
												<th width="10%">Status Bayar</td>
												<th width="10%">Dibuat</td>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no=1;
											foreach ($reports as $report) {
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $report->nama; ?></td>
												<td><?php echo $report->semester; ?></td>
												<td><?php echo $report->nominal; ?></td>
												<td><?php echo $report->status; ?></td>
												<td><?php echo $report->status_bayar; ?></td>
												<td><?php echo $report->created_at; ?></td>
												<td>
													<a class="btn btn-warning btn-sm"
														href="<?= base_url("admin/monitoringdn/").$report->id ?>"><i
															class="fa fa-desktop "></i></a>&nbsp&nbsp
													<button type="button" class="btn btn-sm btn-primary"
														data-toggle="modal"
														data-target="#edit-report<?php echo $report->id;?>"><i
															class="fa fa-user"></i></button>&nbsp&nbsp
													<a class="btn btn-danger btn-sm delete-link"
														href="<?= base_url('User/delete/'.$report->id);?>"><i
															class="fa fa-trash "></i></a>

												</td>
											</tr>
											<?php $no++; } ?>

										</tbody>


									</table>
								</div>
								<div class="tab-pane fade <?= $category == 'pembayaran' ?'show active':''?>"
									id="custom-tabs-one-messages" role="tabpanel"
									aria-labelledby="custom-tabs-one-messages-tab">
									Pembayaran Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.
									Phasellus
									volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum.
									Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec
									augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc.
									Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus
									efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum.
									Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum
									metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare
									magna.
								</div>

							</div>
						</div>
						<!-- /.card -->
					</div>
				</div>
			</div>
		</div>
</div>
</section>
</div>


<script>
	jQuery(document).ready(function () {
		$('.delete-link').on('click', function () {
			var getLink = $(this).attr('href');
			swal({
					title: "Apakah anda yakin?",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					cancelButtonText: "Batalkan !",
					confirmButtonText: "Ya, hapus !",

					closeOnConfirm: false,
					closeOnCancel: false,
				},
				function (isConfirm) {
					if (isConfirm) {
						swal("Deleted!", "User sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "User tidak terhapus :)", "error");
					}

				});
			return false;
		});
	});

</script>

<script>
	$(document).ready(function () {
		$('.dataku').DataTable({
			pageLength: 10,
			responsive: true,
			dom: '<"html5buttons"B>lTfgitp',
			buttons: [{
					extend: 'copy'
				},
				{
					extend: 'csv'
				},
				{
					extend: 'excel',
					title: 'ExampleFile'
				},
				{
					extend: 'pdf',
					title: 'ExampleFile'
				},

				{
					extend: 'print',
					customize: function (win) {
						$(win.document.body).addClass('white-bg');
						$(win.document.body).css('font-size', '10px');

						$(win.document.body).find('table')
							.addClass('compact')
							.css('font-size', 'inherit');
					}
				}
			]

		});

	});

</script>
