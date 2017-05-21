<html>
    <head>
        <title>iKNOW-MY-COUNTRY</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0,minimal-ui" id="viewport"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/alertify.core.css"/>
        <link rel="stylesheet" href="css/alertify.default.css"/>
        <style>

            .details-container{
                height: 35px;
                width: 100%;
                display: table;
                padding-bottom: 5px;
            }
            .details-container div{
                display: table-cell;
                width: 50%;
                text-align: center;
                background: cornflowerblue;
                vertical-align: middle;
                border-right: 4px;
                border-style: ridge;
            }
        </style>
    </head>
    <body>
    <div class="details-container">
        <div onclick="alertify.alert('More Help Here');">Help</div><div onclick="alertify.alert('More info Here')">More info</div>
    </div>
        <div id="map"></div>
    </body>
    <script type="text/javascript" src="js/lib/jquery.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/india.min.js"></script>
    <script type="text/javascript" src="js/lib/alertify.min.js"></script>
    <script type="text/javascript">
        function callThis(event,code){
            $('#'+code).attr('fill','green');

        }
        function callThat(event,code){
                event.preventDefault();
                event.stopPropagation();
        }
        $(document).ready(function(){
            //alertify.alert("Question");
        });
        $('#map').vectorMap({
            map: 'in_mill_en',
            onRegionClick:callThis,
            onRegionOver:callThat,
            onRegionOut:callThat,
            onMarkerLabelShow: callThat,
            onMarkerOver: callThat,
            onMarkerOut: callThat,
            onMarkerClick: callThat
        });
    </script>
</html>
