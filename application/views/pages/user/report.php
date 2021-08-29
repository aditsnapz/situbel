<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Pengelolaan Laporan <?= $category ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Pengaturan</a></li>
						<li class="breadcrumb-item active"><?= $category ?></li>
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
					<div class="card card-secondary collapsed-card">
						<div class="card-header">
							<h3 class="card-title"><b>Filter Data </b></h3>
							<div class="card-tools">
                				<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  				<i class="fas fa-plus"></i></button>
              				</div>
							
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							<form method="POST" action="<?php echo base_url('User/add'); ?>"
								enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-1 col-form-label">Study</label>
										<div class="col-md-3">
											<select name="study" id="study" class="form-control">
												<option>Semua</option>
												<option>Tugas Belajar - Universitas Diponegoro</option>   
											</select>
										</div>
										<label for="nama" class="col-md-1 col-form-label">Tahun</label>
										<div class="col-md-1">
											<select name="study" id="study" class="form-control">
												<option>2020</option>
												<option>2021</option>
											</select>
										</div>
									</div>
									<div class="text-right">
										<a href="<?= base_url('Report') ?>" type="button submit" class="btn btn-sm btn-info"><i
										class="fa fa-search"></i>&nbsp&nbspFilter</a>
									</div>
									
								</div>
								
							</form>
						</div>
						
					</div>
				</div>

			</div>
		</div>

	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"><b>Tabel Data Laporan </b></h3>
							<div class="text-right">
							<?php if($status_report != 1) { ?>
							<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tuition-fee"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button>
							<?php } ?>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">

							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="15%">nama</th>
										<th width="15%">Durasi Studi</th>
										<th width="15%">Semester</th>
										<th width="10%">Status Lapor</th>
										<th width="10%">Status Pembayaran</th>
										<th width="20%">Keterangan</th>
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
										<td><?php echo $report->start_date." - ".$report->start_date; ?></td>
										<td><?php echo $report->semester; ?></td>
										<td><?php echo $report->status; ?></td>
										<td><?php echo $report->status_bayar; ?></td>
										<td><?php echo $report->keterangan; ?></td>

										<td>

											<a type="button" class="btn btn-sm btn-primary"><i
													class="fa fa-edit"></i></a>&nbsp&nbsp
											<!-- <a class="btn btn-danger btn-sm delete-link"
												href="<?= base_url('report/delete/'.$report->id);?>"><i
													class="fa fa-trash "></i></a> -->

										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>

						</div>
					</div>
				</div>
				<div class="modal fade" id="tambah-tuition-fee">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Tambah Tuition Fee</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>

							</div>
							<form method="POST" action="<?php echo base_url('user/'.$route.'_add'); ?>"
								enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nama</label>
										<div class="col-md-10">
											<input type="text" name="nama" id="nama" class="form-control">
											<input type="hidden" name="route" id="route" class="form-control" value="<?= @$route?>">

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
						swal("Deleted!", "report sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "report tidak terhapus :)", "error");
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
			autoWidth: false,
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
