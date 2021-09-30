<!DOCTYPE html>
<html>

<style type="text/css" media="print">
	@page {
		size: landscape;
		margin: 0%;
	}

	.tabel-head p {
		margin-bottom: -5px;
	}

	.tabel-data th,
	td {
		height: 0px;
		text-align: center;
		font-size: 10pt;
		font-family: "Times New Roman", Times, serif;
	}

	.tabel-data p {
		font-size: 10pt;
		margin-bottom: 0px;
	}

	.tabel-print th,
	td {
		padding: 0px;
	}

	.tabel-print th {
		font-weight: bold;
		text-align: center;
		font-size: 10pt;
		font-family: "Times New Roman", Times, serif;
	}

	.ttd {
		page-break-inside: avoid;
	}

</style>

<body onload="window.print()" style="max-height:100%;">
	<div class="contentprint">
		<table class="tabel-head" width="100%" style="font-size: 12pt;padding: 0">
			<tr>
				<td width="100%" valign="top">
					<h1 style="font-family: 'Times New Roman' Times, serif;
	font-weight: bold;
	font-size: 16pt;">KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN, RISET, DAN TEKNOLOGI
					</h1>
					<!-- <img src="<?= base_url() ?>assets/dist/img/Undip_favicon.png" style="max-width:80px"> -->
					<h1 style="font-family: 'Times New Roman' Times, serif;
	font-weight: bold;
	font-size: 14pt;">Universitas Diponegoro Semarang

					</h1>
				</td>
			</tr>
		</table>
		<table class="tabel-head" width="100%" style="font-size: 12pt;padding: 0">
			
				<td width="100%" valign="top" style="padding-top:0">

					
				<h1 style="font-family: 'Times New Roman' Times, serif;
	font-weight: bold;padding-top:0;line-height:0;
	font-size: 12pt;">
						Daftar Penerimaan Penggantian Biaya Asuransi dan Biaya Perkuliahan (Tuition Fee) Semester III
						
				</td>
			</tr>
			<tr>
				<td width="100%" valign="top" style="padding-top:0">
				<h1 style="font-family: 'Times New Roman' Times, serif;
	font-weight: bold;padding-top:0;line-height:0;
	font-size: 12pt;">
					
						dalam rangka Studi Lanjut Tugas Belajar Jenjang Doktor (S3) di Luar Negeri
						
				</td>
			</tr>
			<tr>
				<td width="100%" valign="top" style="padding-top:0">

				<h1 style="font-family: 'Times New Roman' Times, serif;
	font-weight: bold;padding-top:0;line-height:0;
	font-size: 12pt;">
						Bagi Pegawai Pelajar Universitas Diponegoro Tahun 2021
						
				</td>
			</tr>
			</td>
			</tr>
			<tr>
				<td width="100%" valign="top" style="padding-top:0">

					<!-- <h1 style="font-family: 'Times New Roman' Times, serif;
	font-weight: bold;padding-top:0;line-height:0;
	font-size: 12pt;">REPORT PREFERENCES : -->

				</td>
			</tr>

		</table>
		<br>
		<!-- <p>(KURS : <?php// echo $study->mata_uang.' '.$reportbayars->kurs; ?>)</p> -->
		<div class="judul" style="margin-top: 0px;margin-bottom: 10px;width:100%;display:block">
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
				$count = count($reports)+1;
				foreach($reports as $report) {?>
					<tr>
						

						<?php if($no == 1) { ?>
						<td rowspan=<?= $count ?>><?php echo 1; ?></td>
						<td rowspan=<?= $count ?>><?php echo $users->nama; ?></td>
						<td rowspan=<?= $count ?>><?php echo $reportbayars->nomor_sk; ?></td>
						<td rowspan=<?= $count ?>><?php echo $users_detail->no_rekening; ?></td>
						<td rowspan=<?= $count ?>><?php echo $study->university; ?></td>
						<td rowspan=<?= $count ?>><?php echo $study->program_studi; ?></td>
						<?php } else { ?>
						<!-- <td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td> -->
						<?php }?>
						<td><?php echo $report->nama; ?></td>
						<td align="right"><?php 
						$kurs = $reportbayars->kurs;
						$parse1 = str_replace('.','',$kurs);
						$parse2 = str_replace(',','.',$parse1);
						$parse3 = round((float)$parse2, 2);
						$biaya = $report->nominal*$parse3; 
						echo "Rp. " . number_format($biaya, 2, ".", ",");
						?> </td>
					</tr>
					<?php $no++;} ?>
					<tr>
						<!-- <td><?php echo $no; ?></td> -->
						<!-- <td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td> -->
						<td><?php echo $reportbayars->keterangan_biaya_admin; ?></td>
						<td align="right"><?php echo "Rp. " . number_format($reportbayars->biaya_admin, 2, ".", ",");; ?></td>
					</tr>
					<tr>
						<!-- <td ></td> -->
						
						<td colspan="7" align="right">Total Biaya</td>
						<td align="right" id="rupiah"><?php echo "Rp. " . number_format($reportbayars->nominal, 2, ".", ",");; ?></td>
					</tr>
				</table>
				

			</div>
			<div style="min-width:100%">
			<br><br>
			<table class="tabel-data" style="width:100%;padding-top:10px" >
					<tr>
						<td width="30%">Pejabat Pelaksana dan Pengendali Kegiatan (PPPK)
</td>
						<td>Setuju dibayar tgl :
</td>
<td>Semarang

</td>
					</tr>
					<tr>
						<td>BPSDM,

</td>
						<td>BP SUKPA BPSDM

</td>
<td>Pembuat Daftar

</td>

					</tr>
					<tr>
						<td><br><br><br><br>

</td>
						<td><br><br><br><br>

</td>
					</tr>
					<tr>
						<td>Puspitasari, S.Kom


</td>
						<td>Aryati Eka Dewi, A.Md.


</td>
<td>Mona Martinasari, S.T.



</td>

					</tr>
					<tr>
						<td>NIP. 197211011999032003



</td>
						<td>NIP. 198101272003122001


</td>
<td>NIP. H.7.198705102021042001



</td>
					</tr>
				</table>
						</div>

		</div>


</body>


</html>

