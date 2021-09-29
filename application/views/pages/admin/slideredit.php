<!-- summernote -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Slider </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Slider</a></li>
						<li class="breadcrumb-item active">Edit Slider</li>
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
					<div class="card card-danger">
						<div class="card-header">
							<h3 class="card-title "><b>Edit Slider </b></h3>
							<div class="text-right">
								<!-- <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#import-user"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-user"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button> -->
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
						<form method="POST" action="<?php echo base_url('admin/slider/edit_process'); ?>"
								enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									
									<div class="form-group row">
										<label for="text" class="col-md-2 col-form-label">Nama</label>
										<div class="col-md-10">
											<input type="text" name="nama" id="nama" class="form-control" value="<?= $slider->nama ?>">
											<input type="hidden" name="id" id="id" class="form-control " value="<?= $slider->id ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="text" class="col-md-2 col-form-label">Judul</label>
										<div class="col-md-10">
											<textarea type="text" name="judul" id="judul" class="form-control textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $slider->judul ?></textarea>
										</div>
									
									</div>
									<div class="form-group row">
										<label for="text" class="col-md-2 col-form-label">Deskripsi</label>
										<div class="col-md-10">
											<textarea type="text" name="deskripsi" id="deskripsi" class="form-control textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $slider->deskripsi ?></textarea>
										</div>
									
									</div>
									<div class="form-group row">
										<label for="text" class="col-md-2 col-form-label">Foto</label>
										<div class="col-md-10">
											<input type="file" name="foto" id="foto" class="form-control text-right">
										</div>
									</div>
									<div class="form-group row">
										<label for="text" class="col-md-2 col-form-label">Status</label>
										<div class="col-md-10">
										<select name="status" id="status" class="form-control">
											<option value="1">Ya</option>
											<option value="0">Draft</option>
											
										</select>
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
					</div>
				</div>
				
			</div>
		</div>
</div>
</section>
</div>

<script>
		$('.btn-biaya').click(function (e) {
			console.log('tambah');
			$("#biaya_id").clone().insertAfter("#biaya_id");
		});
		$('.btn-biaya-delete').click(function (e) {
			console.log('kurang');
			$("#biaya_id").remove();
		});
		$('.btn-idr').click(function (e) {
			console.log('ok');
			
			if($("input[name='kurs']").is('[readonly]')) {
				console.log('ok2');
				$("input[name='kurs']").val(0);
				$("input[name='kurs']").attr("readonly", false); 
			} else {
				console.log('ok3');
				$("input[name='kurs']").val(1);
				$("input[name='kurs']").attr("readonly", true); 
			}
			
       });

	//    $('.btn-hitung').click(function (e) {
		
	// 		// console.log(values);
	// 		console.log('hitung');
	// 		parse1 = $("#kurs").val().replace('.','');
	// 		console.log(parse1)
	// 		parse2 = parse1.replace(/,/g, '.') 
	// 		console.log(parse2)
	// 		var kurs = parseFloat(parse2);
	// 		var biaya = parseFloat($("#biaya_admin").val());
	// 		console.log(parseFloat(biaya+kurs))
	// 		$("input[name='nominal']").val(parseFloat(biaya+kurs));
	//    });

	  



</script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote({
		height : 150,
	})
  })
</script>
