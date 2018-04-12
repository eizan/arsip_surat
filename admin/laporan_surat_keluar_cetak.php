<?php 
include '../include/database.php';

$dari_tanggal	= $_GET['dari_tanggal'];
$sampai_tanggal	= $_GET['sampai_tanggal'];
		// sql surat tanggal
$sql 			= "SELECT * FROM surat_keluar WHERE tanggal BETWEEN '$dari_tanggal' AND '$sampai_tanggal'";
$hasil 			= mysqli_query($conn,$sql);
$jumlah 		= mysqli_num_rows($hasil);
?>

<script type="text/javascript">
 window.print();
 setTimeout(window.close, 0);
</script>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
h1, p {
	text-align: center;

}
</style>
<h1>Laporan Surat Keluar</h1>
<p>Laporan Surat keluar dari tanggal <?php echo $dari_tanggal; ?> sampai dengan tanggal <?php echo $sampai_tanggal; ?></p>
<table>
	<tr>
		<th>Nama</th>
		<th>Tanggal</th>
		<th>Klasifikasi</th>
		<th>Pengirim</th>
		<th>Sifat</th>
		<th>Kode Box</th>
	</tr>
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
	</table>
