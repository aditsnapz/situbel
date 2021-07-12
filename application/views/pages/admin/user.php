<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Pengelolaan User Admin</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Pengaturan</a></li>
						<li class="breadcrumb-item active">Pengelolaan User Admin</li>
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
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"><b>Tabel Data </b></h3>
							<div class="text-right">
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#import-user"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-user"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">

							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="15%">Nama</th>
										<th width="15%">Username</th>
										<th width="20%">Foto</th>
										<th width="15%">Created</th>
										<th width="15%">Updated</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
                                $no=1;
                                foreach ($users as $user) {
                                ?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $user->nama; ?></td>
										<td><?php echo $user->username; ?></td>
										<td><img src="<?= base_url('assets/uploads/user/images/').$user->foto; ?>" width="100px">
										</td>
										<td><?php echo $user->created_at; ?></td>
										<td><?php echo $user->updated_at; ?></td>
										<td>
											
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-user<?php echo $user->id;?>"><i
													class="fa fa-edit"></i></button>&nbsp&nbsp
											<a class="btn btn-danger btn-sm delete-link"
												href="<?= base_url('admin/user/delete/'.$user->id);?>"><i
													class="fa fa-trash "></i></a>
											
										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>

						</div>
					</div>
				</div>
				<div class="modal fade" id="tambah-user">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Tambah User</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>

							</div>
							<form method="POST" action="<?php echo base_url('admin/user/add'); ?>"
								enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nama</label>
										<div class="col-md-10">
											<input type="text" name="nama" id="nama" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="email" class="col-md-2 col-form-label">Username</label>
										<div class="col-md-10">
											<input type="text" name="username" id="username" class="form-control">
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
				<?php $no=1;
        			foreach ($users as  $user) {
    			?>
				<div class="modal fade" id="edit-user<?php echo $user->id;?>">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title"><strong>Update User</strong></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>

							</div>
							<br>
							<form method="POST" action="<?php echo base_url('admin/user/edit'); ?>"
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
				<?php $no++; } ?>
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