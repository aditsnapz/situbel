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
	font-size: 12pt;">Tugas Belajar Dalam Negeri</h1><br>
	<p>Daftar Penerimaan Penggantian Biaya Asuransi dan Biaya Perkuliahan (Tuition Fee) Semester III
</p><br>
<p>dalam rangka Studi Lanjut Tugas Belajar Jenjang Doktor (S3) di Luar Negeri 
</p><br>
<p>Bagi Pegawai Pelajar Universitas Diponegoro Tahun 2021
</p>
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
		<p>(KURS : <?php echo $study->mata_uang.' '.$reportbayars->kurs; ?>)</p>
		<div class="judul" style="margin-top: 20px;margin-bottom: 30px;width:100%;display:block">
			<div style="min-width:100%;display:flex">
				
				<table class="tabel-data" border=1 style="width:100%;padding-left:15px;padding-top:10px">
				<thead class="atas">
					<tr>
						<th width="5%">ID</th>
						<th width="10%">Nama</th>
						<th width="15%">SK Rektor</th>
						<th width="15%">Nomer Rekening</th>
						<th width="10%">Universitas</th>
						<th width="10%">Program Studi</th>
						<th width="10%">Keterangan</td>
						<th width="10%">Nominal Bayar</td>
						
					</tr>
				</thead>
				<?php 
				$no=1;
				foreach($reports as $report) {?>
					<tr>
						<td><?php echo $no; ?></td>
						
						<?php if($no == 1) { ?>
							<td><?php echo $users->nama; ?></td>
							<td><?php echo $reportbayars->nomor_sk; ?></td>
							<td><?php echo $users_detail->no_rekening; ?></td>
							<td><?php echo $study->university; ?></td>
							<td><?php echo $study->program_studi; ?></td>
						<?php } else { ?>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						<?php }?>
						<td><?php echo $report->nama; ?></td>
						<td align="right"><?php 
						$kurs = $reportbayars->kurs;
						$parse1 = str_replace('.','',$kurs);
						$parse2 = str_replace(',','.',$parse1);
						$parse3 = round((float)$parse2, 2);
						$biaya = $report->nominal; 
						echo $biaya*$parse3;
						?> </td>
					</tr>
				<?php $no++;} ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><?php echo $reportbayars->keterangan_biaya_admin; ?></td>
						<td align="right"><?php echo $reportbayars->biaya_admin; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>Total Biaya</td>
						<td align="right"><?php echo $reportbayars->nominal; ?></td>
					</tr>
				</table>
				
      </div>
			
	</div>
</body>


</html>
