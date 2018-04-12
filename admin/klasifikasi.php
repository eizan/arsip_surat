<?php 
define('TITLE', 'Klasifikasi');

include "../include/header.php";
?>

<div class="span12">

	<?php
	$xcrud->table('klasifikasi');
	$xcrud->validation_required(array('kode','bagian'));

	echo $xcrud->render();
	?>

</div>


<?php 
include "../include/footer.php";
?>