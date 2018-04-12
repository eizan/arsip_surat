<?php
define('TITLE', 'Laporan Surat Keluar');

include "../include/header.php";
include "../include/database.php";
?>
<div class="span6">
	<div class="widget-box">
		<div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
			<h5>Laporan Surat Keluar</h5>
		</div>
		<div class="widget-content nopadding">
			<form role="form" class="form-horizontal" method="post">
				<div class="control_group">
					<label class="control-label">Dari Tanggal</label>
					<div class="controls">
						<input type="date" name="dari_tanggal" class="form-control">
					</div>
				</div>
				<div class="control_group">
					<label class="control-label">Sampai Tanggal</label>
					<div class="controls">
						<input type="date" name="sampai_tanggal" class="form-control">
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<?php 
		if(isset($_REQUEST['submit'])){
			$dari_tanggal			= $_POST['dari_tanggal'];
			$sampai_tanggal			= $_POST['sampai_tanggal'];
		// sql surat tanggal
			$sql 			= "SELECT * FROM surat_keluar WHERE tanggal BETWEEN '$dari_tanggal' AND '$sampai_tanggal'";
			$hasil 			= mysqli_query($conn,$sql);
			$jumlah 		= mysqli_num_rows($hasil);
			if (mysqli_num_rows($hasil) > 0) { ?>

			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
					<h5>Hasil</h5>
				</div>
				<div class="widget-content">
					<a href="laporan_surat_keluar_cetak.php?dari_tanggal=<?php echo $dari_tanggal ?>&sampai_tanggal=<?php echo $sampai_tanggal ?>" class="btn btn-warning" target="_blank"><i class="icon-print"></i> Print</a>
					<br>
					<br>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Tanggal</th>
								<th>Klasifikasi</th>
								<th>Pengirim</th>
								<th>Sifat</th>
								<th>Kode Box</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while($row = mysqli_fetch_assoc($hasil)) {
								?>
								<tr>
									<td><?php echo $row['nomor']; ?></td>
									<td><?php echo $row['tanggal']; ?></td>
									<td><?php echo $row['klasifikasi']; ?></td>
									<td><?php echo $row['pengirim']; ?></td>
									<td><?php echo $row['sifat']; ?></td>
									<td><?php echo $row['kode_box']; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<?php
			} else {
				echo '
				<div class="alert alert-danger">
				<strong>0 Hasil!</strong> Tidak ada data.
				</div>';
			}
		}
		?>
	</div>
</div>
<?php
include "../include/footer.php";
?>