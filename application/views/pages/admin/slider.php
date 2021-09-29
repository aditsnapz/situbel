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
								
								<a href="<?= base_url('admin/slider/add') ?>" type="button" class="btn btn-sm btn-success" ><i class="fa fa-plus"></i>&nbsp&nbspTambah</a>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">

							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="15%">Nama</th>
										<th width="15%">Judul</th>
										<th width="15%">Deskripsi</th>
										<th width="15%">Foto</th>
										<th width="15%">Status</th>
										<th width="15%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
                                $no=1;
                                foreach ($sliders as $slider) {
                                ?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $slider->nama; ?></td>
										<td><?php echo $slider->judul; ?></td>
										<td><?php echo $slider->deskripsi; ?></td>
										<td><img src="<?= base_url('assets/uploads/slider/images/').$slider->foto; ?>" width="100px">
										</td>
										<td><?php echo $slider->status; ?></td>
										<td>
											
											<a href="<?= base_url('admin/slider/edit/'.$slider->id) ?>" type="button" class="btn btn-sm btn-primary"><i
													class="fa fa-edit"></i></a>&nbsp&nbsp
											<a class="btn btn-danger btn-sm delete-link"
												href="<?= base_url('admin/slider/delete/'.$slider->id);?>"><i
													class="fa fa-trash "></i></a>
											<?php if ($slider->status == 0) { ?>
											<a type="button" class="btn btn-sm btn-success" href="<?= base_url('admin/slider/activation/'.$slider->id);?>">Activated</button>
											<?php }?>
										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>

						</div>
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
