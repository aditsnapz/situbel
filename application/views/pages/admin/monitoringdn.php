
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
									<div class="text-right">
								
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-living-cost"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button>
									</div>
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
											if(@$reports != NULL) {
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
															class="fa fa-edit"></i></button>&nbsp&nbsp
													<?php if($report->status!=1) { ?>
													<a class="btn btn-danger btn-sm delete-link"
														href="<?= base_url('User/delete/'.$report->id);?>"><i
															class="fa fa-trash "></i></a>
													<?php } ?>

												</td>
											</tr>
											<?php $no++; }
											} ?>

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
											if(@$reports != NULL) {
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
											<?php $no++; 
											}
										} ?>

										</tbody>


									</table>
								</div>
								<div class="tab-pane fade <?= $category == 'pembayaran' ?'show active':''?>"
									id="custom-tabs-one-messages" role="tabpanel"
									aria-labelledby="custom-tabs-one-messages-tab">
									<div class="text-center">
								
										<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-pembayaran"><i class="fa fa-plus-circle"></i>&nbsp;Proses Pembayaran</button>
									</div>
									<table class="table table-striped table-bordered table-hover dataku">
										<thead class="atas">
											<tr>
												<th width="5%">ID</th>
												<th width="10%">Tanggal Bayar</th>
												<th width="15%">Semester</th>
												<th width="10%">Kurs</th>
												<th width="10%">Nominal</td>
												<th width="10%">Dibuat</td>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no=1;
											if(@$bayars != NULL) {
											foreach ($bayars as $bayar) {
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $bayar->tanggal_bayar; ?></td>
												<td><?php echo $bayar->semester; ?></td>
												<td><?php echo $bayar->kurs; ?></td>
												<td><?php echo $bayar->nominal; ?></td>
												<td><?php echo $bayar->created_at; ?></td>
												<td>
													
													<button type="button" class="btn btn-warning btn-sm"
														data-toggle="modal"
														data-target="#edit-bayar<?php echo $bayar->id;?>"><i
															class="fa fa-desktop "></i></button>&nbsp;&nbsp;
													<a target="_blank()" type="button" class="btn btn-sm btn-primary" 
													href="<?= base_url('admin/tubeldn/pembayaran_cetak/').$bayar->id?>"><i
															class="fa fa-print"></i></button>&nbsp;&nbsp;
													<a class="btn btn-danger btn-sm delete-link"
														href="<?= base_url('User/delete/'.$bayar->id);?>"><i
															class="fa fa-trash "></i></a>

												</td>
											</tr>
											<?php $no++; 
												}
											} ?>

										</tbody>


									</table>
								</div>

							</div>
						</div>
						<!-- /.card -->
					</div>
				</div>
			</div>
				<div class="modal fade" id="tambah-living-cost">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Tambah Living Cost</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>

							</div>
							<form method="POST" action="<?php echo base_url('admin/tubeldn/livingcost_add'); ?>"
								enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nama</label>
										<div class="col-md-10">
											<input type="text" name="nama" id="nama" class="form-control">
											<input type="hidden" name="user_id" id="user_id" class="form-control" value="<?= @$users_id?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="email" class="col-md-2 col-form-label">Periode</label>
										<div class="col-md-5">
											<input type="date" name="start_date" id="start_date" class="form-control">
										</div>
										<div class="col-md-5">
											<input type="date" name="end_date" id="end_date" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="password" class="col-md-2 col-form-label">Semester</label>
										<div class="col-md-10">
											<input type="number" name="semester" id="semester" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="foto" class="col-md-2 col-form-label">Nominal</label>
										<div class="col-md-10">
											<input type="text" name="nominal" id="nominal" class="form-control">
										</div>
									</div>
								
									<div class="form-group row">
										<label for="foto" class="col-md-2 col-form-label">Keterangan</label>
										<div class="col-md-10">
											<textarea type="text" name="keterangan" id="keterangan" class="form-control"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="foto" class="col-md-2 col-form-label">Komentar</label>
										<div class="col-md-10">
											<textarea type="text" name="komentar" id="komentar" class="form-control"></textarea>
										</div>
									</div>
								</div>
								<br><br>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Simpan</button>
									<button type="reset" class="btn btn-danger">Reset</button>
								</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<div class="modal fade" id="tambah-pembayaran">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Tambah Pembayaran</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>

							</div>
							<form method="POST" action="<?php echo base_url('admin/tubeldn/pembayaran_add'); ?>"
								enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Semester</label>
										<div class="col-md-4">
											<input type="hidden" name="user_id" id="user_id" class="form-control" value="<?= @$users_id?>">
											<input type="number" name="semester" id="semester" class="form-control">
											<input type="hidden" name="user_id" id="user_id" class="form-control" value="<?= @$users_id?>">
										</div>
										<label for="password" class="col-md-2 col-form-label">Tanggal Bayar</label>
										<div class="col-md-4">
											<input type="date" name="tanggal_bayar" id="tanggal_bayar" class="form-control">
										</div>
									</div>
									
									<div class="form-group row">
										<label for="foto" class="col-md-2 col-form-label">Living Cost</label>
										<div class="col-md-10">
											<select name="living_cost" id="living_cost" class="form-control">
												<?php if (@$report_livings !=  NULL) {
													foreach($report_livings as $report_living) {
												?>
														<option value="<?= $report_living->id?>"><?= $report_living->nama?></option>
												<?php }
												}
												?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="foto" class="col-md-2 col-form-label">Tuition Fee</label>
										<div class="col-md-10">
										<select name="tuition_fee" id="tuition_fee" class="form-control">
												<?php if (@$report_tuitions !=  NULL) {
													foreach($report_tuitions as $report_tuition) {
												?>
														<option value="<?= $report_tuition->id?>"><?= $report_tuition->nama?></option>
												<?php }
												}
												?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="text" class="col-md-2 col-form-label">Kurs</label>
										<div class="col-md-5">
											<input type="text" name="kurs" id="kurs" class="form-control">
										</div>
										<div class="col-md-5">
										<a target="_blank()" href="https://www.bi.go.id/id/statistik/informasi-kurs/transaksi-bi/default.aspx" type="button" class="btn btn-primary">
										<i class="fa fa-money"></i>Kurs Link</a>
										</div>
									</div>
									
									<div class="form-group row">
										<label for="foto" class="col-md-2 col-form-label">Nominal</label>
										<div class="col-md-10">
											<input type="text" name="nominal" id="nominal" class="form-control" readonly>
										</div>
									</div>
									
								
									
								</div>
								<br><br>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Simpan</button>
									<button type="reset" class="btn btn-danger">Reset</button>
								</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<?php $no=1;
					if(@$reports != NULL) {
        				foreach ($reports as  $user) {
    			?>
				<div class="modal fade" id="edit-report<?php echo $user->id;?>">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title"><strong>Update User</strong></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>

							</div>
							<br>
							<form method="POST" action="<?php echo base_url('User/edit'); ?>"
								enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<input type="hidden" name="id" id="id" class="form-control"
											value="<?= $user->id ?>">
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">nama</label>
										<div class="col-md-10">
											<input type="text" name="nama" id="nama" class="form-control"
												value="<?= $user->nama ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="email" class="col-md-2 col-form-label">Username</label>
										<div class="col-md-10">
											<input type="text" name="username" id="username" class="form-control"
												value="<?= $user->username ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="password" class="col-md-2 col-form-label">Password</label>
										<div class="col-md-10">
											<input type="password" name="password" id="password" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="foto" class="col-md-2 col-form-label">Foto</label>
										<div class="col-md-10">
											<input type="file" name="foto" id="foto" class="form-control">
										</div>
									</div>
								</div>
								<br><br>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Simpan</button>
									<button type="reset" class="btn btn-danger">Reset</button>
								</div>
							</form>

						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<?php $no++; 
				}
			} ?>

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
