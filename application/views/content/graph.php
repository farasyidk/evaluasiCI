<h2 class="title1">Grafik Pengambilan Matkul</h2>
<div class="panel-info widget-shadow">
    <div class="col-md-6">
        <canvas id="pieChart"></canvas>
    </div>
    <div class="col-md-6">
        <canvas id="barChart"></canvas>
    </div>
    <div class="clearfix"> </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/mdb.min.js"></script>
<script type="text/javascript">
    var nama = <?php echo json_encode($nama); ?>;
    var total = <?php echo json_encode($total); ?>;
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var ctxB = document.getElementById("barChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
            labels: nama,
            datasets: [{
                    data: total,
                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                }]
        },
        options: {
            responsive: true
        }
    });  
    var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
        labels: nama,
        datasets: [{
            label: 'Grafik Bar Matkul',
            data: total,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>