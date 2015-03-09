<!DOCTYPE HTML>
<?php include "include/connect.php"?>
<?php
	$sel_member = 'SELECT * FROM kelompok inner join mahasiswa on kelompok.id_kelompok = mahasiswa.id_kelompok and mahasiswa.id_mahasiswa = 1';
	$hasil = $Konek->Exec_Query_Mysql($sel_member);
	$row = mysql_fetch_array($hasil);
	
	$sel_member2 = 'SELECT * FROM kelompok inner join mahasiswa on kelompok.id_kelompok = mahasiswa.id_kelompok and mahasiswa.id_mahasiswa = 2';
	$hasil2 = $Konek->Exec_Query_Mysql($sel_member2);
	$row2 = mysql_fetch_array($hasil2);
?>
<HTML>
	<link rel="stylesheet" href="css/style.css">
	<div id = header>
		<div class = judul>SI Kerja Praktik</div>
	</div>
	
	<div class = kiri>
		<div class = konten_kiri_utama>Beranda</div>
		<div class = konten_kiri_joss>Daftar Peserta KP</div>
		<div class = konten_kiri>Daftar Dosen Pembimbing</div>
		<div class = konten_kiri>Daftar Organisasi</div>
		<div class = konten_kiri_bawah>Logout</div>
	</div>
	
	<div class = container>
		<div class = biasa>
			Ubah Data Peserta Kerja Praktik
			<form method="post" action="">
				<table>
					<tr>
						<td>Status KP</td>
						<td><input <input name="status_kp" id="status_kp" type="text" class=""  value="<?php echo($row['status_KP']);?>" /></td>
					</tr> 
					<tr>
						<td>NRP Mahasiswa 1</td>
						<td><input <input name="nrp1" id="nrp1" readonly="readonly" type="text" class=""  value="<?php echo($row['nrp_mahasiswa']); ?>" /></td>
					</tr>
					<tr>
						<td>Nama Mahasiswa 1</td>
						<td><input <input name="nama1" id="nama1" readonly="readonly" type="text" class=""  value="<?php echo($row['nama_mahasiswa']); ?>" /></td>
					</tr> 
					<tr>
						<td>NRP Mahasiswa 2</td>
						<td><input <input name="nrp2" id="nrp2" readonly="readonly" type="text" class=""  value="<?php echo($row2['nrp_mahasiswa']); ?>" /></td>
					</tr> 
					<tr>
						<td>Nama Mahasiswa 2</td>
						<td><input <input name="nama2" id="nama2" readonly="readonly" type="text" class=""  value="<?php echo($row2['nama_mahasiswa']); ?>" /></td>
					</tr> 
					<tr>
						<td>Organisasi Tujuan</td>
						<td><input <input name="organ" id="organ" type="text" class=""  value="<?php echo "INDOSAT"; ?>" /></td>
					</tr> 
					<tr>
						<td>Tanggal Mulai KP</td>
						<td><input value="<?php $tgl = explode('-', $row['tanggal_mulai']); echo date($tgl[2].'-'.$tgl[1].'-'.$tgl[0]); ?>" name="tgl_1" id="tgl_1" type="text" class="input-small"  placeholder="-" /></td>
					</tr> 
					<tr>
						<td>Tanggal Selesai KP</td>
						<td><input value="<?php $tgl = explode('-', $row['tanggal_selesai']); echo date($tgl[2].'-'.$tgl[1].'-'.$tgl[0]); ?>" name="tgl_2" id="tgl_2" type="text" class="input-small"  placeholder="-" /></td>
					</tr> 
				</table>
				<button class="btn btn-warning" type="submit">Ubah</button>
			</form>
		</div>
	</div>
	
</HTML>