
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('<?= base_url()?>assets/frontend/img/banner/5.jpg');">
	<div class="container">
		<div class="pagination-area">
			<h1>Registration</h1>
			<ul>
				<li><a href="#">Home</a> -</li>
				<li>Registration</li>
			</ul>
		</div>
	</div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Registration Page Area Start Here -->
<div class="registration-page-area bg-secondary">
	<div class="container">
		<h2 class="sidebar-title">Registration</h2>
		<div class="registration-details-area inner-page-padding">
			<form action="<?php echo base_url('pendaftaran/Registrasi/proses'); ?>" method="POST">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label class="control-label" for="first-name">NIP *</label>
							<input type="text" id="nip" name="nip" class="form-control">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label class="control-label" for="first-name">Password *</label>
							<input type="password" id="password" name="password" class="form-control">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label class="control-label" for="first-name">Username *</label>
							<input type="text" id="first-name" name="username" class="form-control">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label class="control-label" for="last-name">Nama*</label>
							<input type="text" id="nama" name="nama" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label class="control-label" for="email">E-mail Address *</label>
							<input type="text" id="email" name="email" class="form-control">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label class="control-label" for="phone">Phone *</label>
							<input type="text" id="phone" name="mobile_phone" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label class="control-label" for="email">Program Belajar *</label>
							<select name="status" id="status" class="form-control">
								<option value="1">Tugas Belajar Dalam Negeri</option>
								<option value="2">Tugas Belajar Luar Negeri</option>
								<option value="3">Ijin Belajar</option>
							</select>
						</div>
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="pLace-order mt-30">
							<button class="view-all-accent-btn disabled" type="submit" value="Login">Submit</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Registration Page Area End Here -->

