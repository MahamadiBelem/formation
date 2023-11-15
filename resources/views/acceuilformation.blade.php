@extends('layout.templateformation')
<!-- CET TEMPLATE INDIQUE LES DIAGRAMME EN BATON ET EN SECTEUR -->
@section('content')
<div style="margin-top: 10%;margin-left:-45%; ">
	<div class="row">
   <div class="col-6">
        <!-- BAR CHART -->
        <div class="card">
          <div class="card-header" style="background-color: #3e61fa;color:white">
            <h3 class="card-title">Le nombre de formateur par domaine de formation(Diagramme en bâton)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  </div>   
  <div class="col-6">
    <!-- BAR CHART -->
    <div class="card">
      <div class="card-header" style="background-color: #3e61fa;color:white">
        <h3 class="card-title">Le nombre de formateur par domaine de formation(Diagramme en circulaire)</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
<script src="{{asset('dist/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<script>
  var cData = JSON.parse(`<?php echo $chart_data; ?>`);
  
   var areaChartData = {
        labels  : cData.label,
        datasets: [
          {
            label               : '',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : cData.data
          },
          {
            label               : '',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : cData.data
          },
        ]
      }

   var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
    
    var rgb = [];

for(var i = 0; i < cData.label.length; i++)
{
  rgb.push('#'+(Math.random()*0xFFFFFF<<0).toString(16));

}
   

console.log(rgb)

     var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: cData.label,
      datasets: [
        {
          data: cData.data,
          backgroundColor : rgb,
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })
      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          
      ],
      datasets: [
        {
          data: cData.data,
          backgroundColor : rgb,
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })
  

</script>

@endsection