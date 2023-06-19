@extends('layout.templatecooperative')

@section('content')
<!-- CE TEMPLATE PREND EN COMPTE LES OPA ET LE FONCIER RURAL SUR LA PAGE ACCEUIL GENERALE-->
<html>

<div style="margin-top: 10%;margin-left:-45%;">
    <div align=center>
        <h1>Bienvenue</h1>
    </div>
    <h4>
        <div align=center> <strong> Cartographie Dynamique des Cooperatives Existantes</div> </strong>
    </h4>

    <head>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {
                "packages": ["map"],
                "mapsApiKey": "AIzaSyDyRftKqNgZzO33k7Qz8aXZLUWA17K22Cc"
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Lat', 'Long', 'Name'],
                    <?php echo $array ?>
                ]);

                var map = new google.visualization.Map(document.getElementById('map_div'));
                map.draw(data, {
                    showTooltip: true,
                    showInfoWindow: true
                });
            }
        </script>
    </head>

    <body>
    <div class="card-header" style="background-color: #3e61fa;color:white">
            <h3 class="card-title">Diagramme en bâton</h3> 
    </div>
    <br>
    <div align=center>
    <div class="mapouter"><div class="gmap_canvas"><iframe width="2048" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=burkina faso&t=k&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:510px;width:2048px;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:510px;width:2048px;}</style></div></div>
        <br>
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://capcuttemplate.org/">Capcut Template</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
    </div>  
     
        <!--div id="map_div" style="width: 1400x; height: 550px"></div-->
    </body>
</div>

</html>

@endsection
