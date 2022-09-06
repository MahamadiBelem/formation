<!DOCTYPE html>
<html>
@extends('layout.templatecooperative')
@section('content')
<div style="margin-top: 10%;margin-left:-45%; ">

    <head>
        <title>genre/nombre/pourcentage</title>
        <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
        </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <style type="text/css">
            .box {
                width: 800px;
                margin: 0 auto;
            }
        </style>
    </head>

    <body>
        <div class="container " style="margin-top: 50px;">
            <div class="row ">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-primary ">
                        <div class="panel-heading coopvert ">
                            <h3 class="panel-title ">nombre par genre/pourcentage</h3>
                        </div>
                        <div class="panel-body " align="left">
                            <div id="pie_chart" style="width:750px; height:450px;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            var analytics = <?php echo $genre; ?>

            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable(analytics);
                var options = {
                    title: '',
                    is3D: true,
                };
                var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
                chart.draw(data, options);
            }
        </script>
        @endsection
    </body>
</div>

</html>
