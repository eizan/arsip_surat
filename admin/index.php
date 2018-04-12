<?php
define('TITLE', 'Dashboard');

include "../include/header.php";
include "../include/database.php";
?>
<?php
// sql Masuk
$hasil_surat_masuk = mysqli_query($conn,"SELECT * FROM surat_masuk");
$jumlah_surat_masuk = mysqli_num_rows($hasil_surat_masuk);
// surat keluar
$hasil_surat_keluar = mysqli_query($conn,"SELECT * FROM surat_keluar");
$jumlah_surat_keluar = mysqli_num_rows($hasil_surat_keluar);


?>

<!-- <div  class="quick-actions_homepage">
    <ul class="quick-actions">
      <li class="bg_lb"> <a href="#"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
      <li class="bg_lg"> <a href="#"> <i class="icon-shopping-cart"></i> Shopping Cart</a> </li>
      <li class="bg_ly"> <a href="#"> <i class=" icon-globe"></i> Web Marketing </a> </li>
      <li class="bg_lo"> <a href="#"> <i class="icon-group"></i> Manage Users </a> </li>
      <li class="bg_ls"> <a href="#"> <i class="icon-signal"></i> Check Statistics</a> </li>
    </ul>
</div> -->
<div class="span8">
    <ul class="quick-actions">
      <li class="bg_lb"> <a href="#"> <i class="icon-book"></i> <?php echo $jumlah_surat_masuk ?> Surat Masuk </a> </li>
      <li class="bg_lo"> <a href="#"> <i class="icon-group"></i> <?php echo $jumlah_surat_keluar ?> Surat Keluar </a> </li>
      <li class="bg_ls"> <a href="#"> <i class="icon-signal"></i> <?php echo $jumlah_surat_masuk+$jumlah_surat_keluar ?> Total Surat </a> </li>
      <li class="bg_lg"> <a href="#"> <i class="icon-print"></i> Laporan Surat </a> </li>
    </ul>

    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Bar chart</h5>
        </div>
        <div class="widget-content">
            <canvas id="myChart2" height="138"></canvas>
        </div>
    </div>
</div>

    <div class="span4">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Pie chart</h5>
        </div>
        <div class="widget-content">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
    </div>
</div>

	
    



<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Surat Masuk", "Surat Keluar"],
            datasets: [{
                label: '# of Votes',
                data: [<?php echo $jumlah_surat_masuk ?>, <?php echo $jumlah_surat_keluar ?>],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById("myChart2");
    var myChart2 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Surat Masuk", "Surat Keluar"],
            datasets: [{
                label: '# Jumlah',
                data: [<?php echo $jumlah_surat_masuk ?>, <?php echo $jumlah_surat_keluar ?>],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<!-- include jquery untuk tampilan -->
<script src="../assets/matrix/js/jquery.min.js"></script> 

<?php
include "../include/footer.php";
?>