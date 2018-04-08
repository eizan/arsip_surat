<?php
define('TITLE', 'Dashboard');

include "../include/header.php";
include "../include/nav.php";
include "../include/database.php";
?>
<?php
// sql peserta
$sql_peserta = "SELECT * FROM peserta";
$hasil_peserta = mysqli_query($conn,$sql_peserta);
$jumlah_peserta = mysqli_num_rows($hasil_peserta);
// sql kantor
$sql_peserta_kantor = "SELECT * FROM peserta WHERE kel_bagian IS NULL";
$hasil_peserta_kantor = mysqli_query($conn,$sql_peserta_kantor);
$jumlah_peserta_kantor = mysqli_num_rows($hasil_peserta_kantor);
// sql lapangan
$sql_peserta_lapangan = "SELECT * FROM peserta where kel_bagian != 'NULL'";
$hasil_peserta_lapangan = mysqli_query($conn,$sql_peserta_lapangan);
$jumlah_peserta_lapangan = mysqli_num_rows($hasil_peserta_lapangan);

?>




<div class="span6">
	<div class="widget-box">
		<div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
			<h5>Pie chart</h5>
		</div>
		<div class="widget-content">
			<canvas id="myChart" width="100" height="100"></canvas>
		</div>
	</div>
</div>
<div class="span6">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Bar chart</h5>
        </div>
        <div class="widget-content">
            <canvas id="myChart2" width="100" height="100"></canvas>
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
                            data: [15, 10],
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
                            data: [15, 10],
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


	<?php
	include "../include/footer.php";
	?>