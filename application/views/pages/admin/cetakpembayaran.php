<!DOCTYPE html>
<html>

<style type="text/css" media="print">
	@page {size: landscape;margin:10%;}
	.tabel-head p{
		margin-bottom: -2px;
	}
	.tabel-data th, td{
		height: 5px;
		text-align: center;
		font-size: 10pt;
		font-family: "Times New Roman", Times, serif;
	}
	.tabel-data p{
		font-size:10pt;
		margin-bottom: -2px;
	}
	.tabel-print th,td{
		padding: 0px;
	}
	.tabel-print th{
		font-weight: bold;
		text-align: center;
		font-size: 10pt;
		font-family: "Times New Roman", Times, serif;
	}
	.ttd{
		page-break-inside: avoid;
	}
</style>
<body onload="window.print()" style="max-height:100%;">
	<div class="contentprint">
		<table class="tabel-head" width="100%" style="font-size: 12pt;padding: 0">
			<tr>
				<td width="100%" valign="top" >
                <img src="<?= base_url() ?>assets/dist/img/Undip_favicon.png" style="max-width:80px">
        <h1 style="font-family: 'Times New Roman' Times, serif;
	font-weight: bold;
	font-size: 14pt;">PEMBAYARAN SITUBEL DIPONEGORO UNIVERSITY</h1>
				</td>
			</tr>
		</table>
        <table class="tabel-head" width="100%" style="font-size: 12pt;padding: 0">
			<tr>
				<td width="100%" valign="bottom" style="padding-bottom:0">
        <h1 style="font-family: 'Times New Roman' Times, serif;
	font-weight: bold;paddin-bottom:0;
	font-size: 12pt;">Tugas Belajar Dalam Negeri</h1>
				</td>
			</tr>
            <tr>
				<td width="100%" valign="top" style="padding-top:0">
				
        <h1 style="font-family: 'Times New Roman' Times, serif;
	font-weight: bold;padding-top:0;line-height:0;
	font-size: 12pt;">PROGRAM PREFERENCES : ;  
						
				</td>
			</tr>
		</table>
		<div class="judul" style="margin-top: 20px;margin-bottom: 30px;width:100%;display:block">
			<div style="min-width:100%;display:flex">
                
				<table class="tabel-data" style="width:100%;padding-left:15px;padding-top:10px">
				<thead class="atas">
					<tr>
						<th width="5%">ID</th>
						<th width="15%">Nama</th>
						<th width="15%">Semester</th>
						<th width="10%">Nominal</th>
						<th width="10%">Dibuat</td>
						
					</tr>
				</thead>
				<?php 
				$no=1;
				foreach($reports as $report) {?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $report->nama; ?></td>
						<td><?php echo $report->semester; ?></td>
						<td><?php echo $report->nominal; ?></td>
						<td><?php echo $report->created_at; ?></td>
					</tr>
				<?php $no++;} ?>
					
				</table>
				
      </div>
			
	</div>
</body>


</html>
