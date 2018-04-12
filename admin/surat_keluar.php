<?php 
define('TITLE', 'Surat Keluar');

include "../include/header.php";
?>

<div class="span12">

	<?php
	$xcrud->table('surat_keluar');
	$xcrud->change_type('tanggal', 'date');
	$xcrud->change_type('file', 'image');
	$xcrud->change_type('sifat','select','','B,R,SR');
	$xcrud->change_type('kode_box','select','','1B,1C,1D');
	$xcrud->change_type('kode_rak','select','','A,B,C,D');
	$xcrud->change_type('kode_almari','select','','1,2,3,4');
	$xcrud->relation('klasifikasi','klasifikasi','bagian',array('kode','bagian'));	
	$xcrud->fields('nomor,tanggal,klasifikasi,pengirim,sifat,perihal,ringkasan,keterangan,file,keterangan', false, 'Informasi Surat');
	$xcrud->fields('kode_box,kode_rak,kode_almari', false, 'Penyimpanan');
	$xcrud->validation_required(array('nomor','tanggal','klasifikasi','pengirim','sifat','perihal','ringkasan','keterangan','kode_box','kode_rak','kode_almari','keterangan'));
	echo $xcrud->render();
	?>

</div>


<?php 
include "../include/footer.php";
?>