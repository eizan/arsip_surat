<?php 
define('TITLE', 'Surat Masuk');

include "../include/header.php";
include "../include/nav.php";
?>

<div class="span12">

	<?php
	$xcrud->table('surat_masuk');
	$xcrud->change_type('tanggal', 'date');

	echo $xcrud->render();
	?>

</div>

<?php 
include "../include/footer.php";
?>