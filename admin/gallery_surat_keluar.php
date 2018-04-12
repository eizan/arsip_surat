<?php
define('TITLE', 'Gallery Surat Keluar');

include "../include/header.php";
include "../include/database.php";
?>

<?php 
$sql = "SELECT * FROM surat_keluar";
$result = mysqli_query($conn,$sql);
 ?>
<div class="widget-box">
	<div class="widget-title"> <span class="icon"> <i class="icon-picture"></i> </span>
		<h5>Gallery</h5>
	</div>
	<div class="widget-content">
		<ul class="thumbnails">
			<?php 
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) { ?>
			<li class="span4"> <a> <img src="../uploads/<?php echo $row['file'] ?>" alt="" > </a>
				<div class="actions"> <a title="" class="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="../uploads/<?php echo $row['file'] ?>"><i class="icon-search"></i></a> </div>
			</li>
			<?php }} ?>
		</ul>
	</div>
</div>

<?php
include "../include/footer.php";
?>