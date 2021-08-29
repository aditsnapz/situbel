<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
				<?php if(@$this->session->userdata('session_user')['status'] == 2) { ?>
					<h1>Tugas Belajar Luar Negeri</h1>
				<?php } else {?>
					<h1>Tugas Belajar Dalam Negeri</h1>
				<?php } ?>
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
							
						</div>
						<div class="card-body">
							
									<div class="row">
										<div class="col-12 col-sm-4">
											
											<div class="col-6">
												<img src="<?= base_url('assets/uploads/user/images/').$profile->foto ?>"
													class="product-image" alt="Product Image">
											</div>
											<div class="col-6 product-image-thumbs">
												<div class="product-image-thumb active"><img
														src="<?= base_url('assets/uploads/user/images/').$profile->foto ?>"
														alt="Product Image"></div>
												<div class="product-image-thumb"><img src="<?= base_url('assets/uploads/user/images/').$profile->foto ?>"
														alt="Product Image"></div>
												<!-- <div class="product-image-thumb"><img src="../../dist/img/prod-3.jpg"
														alt="Product Image"></div> -->
											</div>
										</div>
										<div class="col-12 col-sm-8">
										<?php if(@$this->session->userdata('session_user')['status'] == 2) { ?>
											<h3 class="my-3">Profile Tugas Belajar Luar Negeri</h3>
										<?php } else {?>
											<h3 class="my-3">Profile Tugas Belajar Dalam Negeri</h3>
										<?php } ?>
											
											<p>Berikut adalah profile informasi mahasiswa.</p>

											<hr>
											<h4>Nama </h4>
											<input type="text" name="nama" id="nama" class="col-md-10 form-control" value="<?= $profile->nama ?>">
											<h4>Email </h4>
											<input type="text" name="nama" id="nama" class="col-md-10 form-control" value="<?= $profile->email ?>">
											<h4>Tempat & Tanggal Lahir </h4>
											<input type="text" name="nama" id="nama" class="col-md-10 form-control" value="<?= $profile->pob.' , '.$profile->dob ?>">
											<h4>No HP </h4>
											<input type="text" name="nama" id="nama" class="col-md-10 form-control" value="<?= $profile->mobile_phone ?>">
											
											<h4>Universitas Logo</h4>
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-default text-center active">
												<center><img src="<?= base_url('assets/gambar/Ikon-Undip.png')?>" width="40%"></center>
													
												</label>
												
											</div>
											<h4>Universitas</h4>
											<input type="text" name="nama" id="nama" class="col-md-10 form-control" value="<?= $profile->university ?>">
											<h4>Program Studi </h4>
											<input type="text" name="nama" id="nama" class="col-md-10 form-control" value="<?= $profile->program_studi ?>">
											<h4 class="mt-3">Lokasi Universitas </h4>
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-default text-center">
													<input type="radio" name="color_option" id="color_option1"
														autocomplete="off">
													<span class="text-xl"><?= $profile->country ?></span>
													<br>
													<?= $profile->city ?>
												</label>
												
											</div>

											<div class="bg-gray py-2 px-3 mt-4">
												<h2 class="mb-0">
													$80.00
												</h2>
												<h4 class="mt-0">
													<small>Total Bayar </small>
												</h4>
											</div>

											

										</div>
									</div>
									<div class="row mt-4">
										<nav class="w-100">
											<div class="nav nav-tabs" id="product-tab" role="tablist">
												<a class="nav-item nav-link active" id="product-desc-tab"
													data-toggle="tab" href="#product-desc" role="tab"
													aria-controls="product-desc" aria-selected="true">Description</a>
												<a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
													href="#product-comments" role="tab" aria-controls="product-comments"
													aria-selected="false">Comments</a>
												<a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab"
													href="#product-rating" role="tab" aria-controls="product-rating"
													aria-selected="false">Rating</a>
											</div>
										</nav>
										<div class="tab-content p-3" id="nav-tabContent">
											<div class="tab-pane fade show active" id="product-desc" role="tabpanel"
												aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet,
												consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum
												ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
												Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia
												arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet
												cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et,
												commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus
												varius metus quam, id dapibus velit mattis eu. Praesent et semper risus.
												Vestibulum erat erat, condimentum at elit at, bibendum placerat orci.
												Nullam gravida velit mauris, in pellentesque urna pellentesque viverra.
												Nullam non pellentesque justo, et ultricies neque. Praesent vel metus
												rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc
												vitae consectetur. Suspendisse venenatis, tortor non convallis interdum,
												urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a
												erat fringilla sollicitudin ultrices vel metus. </div>
											<div class="tab-pane fade" id="product-comments" role="tabpanel"
												aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed
												venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet.
												Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget
												neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis
												elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex
												pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit,
												massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl
												dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices
												venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel
												id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum.
											</div>
											<div class="tab-pane fade" id="product-rating" role="tabpanel"
												aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam
												ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean
												elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis
												malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus
												aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum
												nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh
												rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus,
												vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at,
												consectetur nec justo. Quisque suscipit odio velit, at accumsan urna
												vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo
												porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor
												vel nisl commodo ullamcorper. Donec varius massa at semper posuere.
												Integer finibus orci vitae vehicula placerat. </div>
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
