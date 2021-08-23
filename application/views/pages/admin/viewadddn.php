<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Tambah Pembayaran Baru</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Pembayaran</a></li>
						<li class="breadcrumb-item active">Tambah Pembayaran</li>
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
							<h3 class="card-title "><b>Tambah Pembayaran </b></h3>
							<div class="text-right">
								<!-- <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#import-user"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-user"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button> -->
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
						<form method="POST" action="<?php echo base_url('admin/tubeldn/pembayaran_add'); ?>"
								enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Semester</label>
										<div class="col-md-1">
											<input type="hidden" name="user_id" id="user_id" class="form-control" value="<?= @$users_id?>">
											<input type="text" name="semester" id="semester" class="form-control">
											<input type="hidden" name="user_id" id="user_id" class="form-control" value="<?= @$users_id?>">
										</div>
										
										<label for="password" class="col-md-1 col-form-label"></label>
										<label for="password" class="col-md-2 col-form-label">Tanggal Bayar</label>
										<div class="col-md-2">
											<input type="date" name="tanggal_bayar" id="tanggal_bayar" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="text" class="col-md-2 col-form-label">Kurs</label>
										<div class="col-md-2">
											<input type="text" name="kurs" id="kurs" class="form-control text-right">
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-success btn-idr" id="btn-idr">IDR</button>
											<a target="_blank()" href="https://www.bi.go.id/id/statistik/informasi-kurs/transaksi-bi/default.aspx" type="button" class="btn btn-primary">
											<i class="fa fa-money"></i>Kurs Link</a>
										</div>
									
									</div>
									<div class="form-group row">
										<label for="text" class="col-md-2 col-form-label">Nomor SK</label>
										<div class="col-md-6">
											<textarea type="text" name="nomor_sk" id="nomor_sk" class="form-control" rows="4"></textarea>
										</div>
									
									</div>
									<div class="form-group row">
										<label for="text" class="col-md-2 col-form-label">Keterangan Biaya Admin</label>
										<div class="col-md-6">
											<textarea type="text" name="keterangan_biaya_admin" id="keterangan_biaya_admin" class="form-control" rows="4"></textarea>
										</div>
									
									</div>
									<div class="form-group row">
										<label for="text" class="col-md-2 col-form-label">Biaya Admin</label>
										<div class="col-md-6">
										<input type="text" name="biaya_admin" id="biaya_admin" class="form-control text-right">
										</div>
									
									</div>
									
									
									<div class="form-group row">
										<label for="foto" class="col-md-2 col-form-label"> Biaya</label>
										<div class="col-md-8">
											<select name="biaya[]" id="biaya_id" class="form-control biaya_unpaid" >
												<option readonly>Please Select</option>
												<?php if (@$report_unpaids !=  NULL) {
													foreach($report_unpaids as $report_unpaid) {
												?>
														<option value="<?= $report_unpaid->id?>"><?= $report_unpaid->nama.'&nbsp;&nbsp;&nbsp;&nbsp;<p align="pull-right">( '.$studys->mata_uang.' '.$report_unpaid->nominal.' )</p>'?></option>
												<?php }
												}
												?>
											
											</select>
											
										</div>
										<!-- <input type="text" name="biaya" id="biaya" class="form-control text-right"> -->
										<div class="col-md-2">
											<button type="button" class="btn btn-success btn-biaya btn-sm" id="btn-biaya"><i class="fa fa-plus-circle"></i></button>
											<button type="button" class="btn btn-danger btn-biaya-delete btn-sm" id="btn-biaya-delete"><i class="fa fa-times-circle"></i></button>
										</div>
									</div>
									
									<!-- <div class="form-group row text-center">
										<div class="col-md-12">
											<button type="button" class="btn btn-warning btn-hitung" id="btn-hitung">Hitung</button>
										</div>
									</div> -->
									
									<!-- <div class="form-group row">
										
										<label for="foto" class="col-md-2 col-form-label">Nominal</label>
										<div class="col-md-10">
											<input type="text" name="nominal" id="nominal" class="form-control text-right" value="0" readonly>
										</div>
									</div> -->
									
								
									
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
