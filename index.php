<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Data AWS Sadeng</title>

    <script type="text/javascript" src="js/jquery.min.js" ></script>
    <script type="text/javascript" src="js/highcharts.js" ></script>

    <script>

        $ (document).ready(function () {
            Highcharts.setOptions({
                global: {
                    useUTC:false
                }
            });


        var options= {
            chart:{
                renderTo: 'pressure_container',
                height  : 320,
                zoomType : 'xy'
            },
            title:{
                text: 'Data AWS SADENG PAAVG1M'
            },
            events:{
                load: refreshChart()
            },
            tooltip:{
                labels: {
                    format: '{value:.2f}'
                },
                valueSuffix:' hPa'
            },
            xAxis:{
                type:'datetime'
            },
            yAxis:{
                labels: {
                    format: 'value:.2f hpa'
                },
                type  :'linear',
                title :{
                    text:'PAAVG1M (hPa)'
                }
            },
            series:[{
                name: 'PAAVG1M'
            }]

        }

        $.getJSON("datamaria.php", function(json) {
            options.series[0].data = json;
            chart = new Highcharts.Chart(options);
        });


        function refreshChart() {
            setInterval(function () {
                $.getJSON("datamaria.php", function (json) {
                    options.series[0].data =json;
                    chart = new Highcharts.Chart(options);
                });
            },6000);
        }
        });
    </script>

    <script>

        $ (document).ready(function () {
            Highcharts.setOptions({
                global: {
                    useUTC:false
                }
            });


            var options= {
                chart:{
                    renderTo: 'rain_container',
                    height  : 320,
                    zoomType : 'xy'
                },
                title:{
                    text: 'Data AWS SADENG PRSUM1M'
                },
                events:{
                    load: refreshChart()
                },
                tooltip:{
                    labels: {
                        format: '{value:.2f}'
                    },
                    valueSuffix:' mm'
                },
                xAxis:{
                    type:'datetime'
                },
                yAxis:{
                    labels: {
                        format: 'value:.2f mm'
                    },
                    type  :'linear',
                    title :{
                        text:'PRSUM1M (mm)'
                    }
                },
                series:[{
                    name: 'PRSUM1M'
                }]

            }

            $.getJSON("datamaria_rain.php", function(json) {
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
            });


            function refreshChart() {
                setInterval(function () {
                    $.getJSON("datamaria_rain.php", function (json) {
                        options.series[0].data =json;
                        chart = new Highcharts.Chart(options);
                    });
                },6000);
            }
        });
    </script>

    <script>

        $ (document).ready(function () {
            Highcharts.setOptions({
                global: {
                    useUTC:false
                }
            });


            var options= {
                chart:{
                    renderTo: 'humidity_container',
                    height  : 320,
                    zoomType : 'xy',
                    spacingBottom: 15,
                    spacingTop: 10,
                    spacingLeft: 10,
                    spacingRight: 10,
//                    shadow: {
//                        color: 'blue',
//                        width: 1,
//                        offsetX: 0,
//                        offsetY: 0
//                    },
                },

                title:{
                    text: 'Data AWS SADENG RHAVG1M'
                },
                events:{
                    load: refreshChart()
                },
                tooltip:{
                    labels: {
                        format: '{value:.2f}'
                    },
                    valueSuffix:' %'
                },
                xAxis:{
                    type:'datetime'
                },
                yAxis:{
                    labels: {
                        format: 'value:.2f %'
                    },
                    type  :'linear',
                    title :{
                        text:'RHAVG1M (%)'
                    }
                },
                series:[{
                    name: 'RHAVG1M'
                }]

            }

            $.getJSON("datamaria_humidity.php", function(json) {
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
            });


            function refreshChart() {
                setInterval(function () {
                    $.getJSON("datamaria_humidity.php", function (json) {
                        options.series[0].data =json;
                        chart = new Highcharts.Chart(options);
                    });
                },6000);
            }
        });
    </script>

    <script>

        $ (document).ready(function () {
            Highcharts.setOptions({
                global: {
                    useUTC:false
                }
            });


            var options= {
                chart:{
                    renderTo: 'radiation_container',
                    height  : 320,
                    zoomType : 'xy',
                    spacingBottom: 15,
                    spacingTop: 10,
                    spacingLeft: 10,
                    spacingRight: 10,
//                    shadow: {
//                        color: 'blue',
//                        width: 1,
//                        offsetX: 0,
//                        offsetY: 0
//                    },
                },

                title:{
                    text: 'Data AWS SADENG SRAVG1M'
                },
                events:{
                    load: refreshChart()
                },
                tooltip:{
                    labels: {
                        format: '{value:.2f}'
                    },
                    valueSuffix:' W/m2'
                },
                xAxis:{
                    type:'datetime'
                },
                yAxis:{
                    labels: {
                        format: 'value:.2f %'
                    },
                    type  :'linear',
                    title :{
                        text:'SRAVG1M (W/m2)'
                    }
                },
                series:[{
                    name: 'RHAVG1M'
                }]

            }

            $.getJSON("datamaria_radiation.php", function(json) {
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
            });


            function refreshChart() {
                setInterval(function () {
                    $.getJSON("datamaria_radiation.php", function (json) {
                        options.series[0].data =json;
                        chart = new Highcharts.Chart(options);
                    });
                },6000);
            }
        });
    </script>

    <script>

        $ (document).ready(function () {
            Highcharts.setOptions({
                global: {
                    useUTC:false
                }
            });


            var options= {
                chart:{
                    renderTo: 'temperature_container',
                    height  : 320,
                    zoomType : 'xy',
                    spacingBottom: 15,
                    spacingTop: 10,
                    spacingLeft: 10,
                    spacingRight: 10,
//                    shadow: {
//                        color: 'blue',
//                        width: 1,
//                        offsetX: 0,
//                        offsetY: 0
//                    },
                },

                title:{
                    text: 'Data AWS SADENG TAAVG1M'
                },
                events:{
                    load: refreshChart()
                },
                tooltip:{
                    labels: {
                        format: '{value:.2f}'
                    },
                    valueSuffix:' °C'
                },
                xAxis:{
                    type:'datetime'
                },
                yAxis:{
                    labels: {
                        format: 'value:.2f C'
                    },
                    type  :'linear',
                    title :{
                        text:'TAAVG1M (°C)'
                    }
                },
                series:[{
                    name: 'TAAVG1M'
                }]

            }

            $.getJSON("datamaria_temperature.php", function(json) {
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
            });


            function refreshChart() {
                setInterval(function () {
                    $.getJSON("datamaria_temperature.php", function (json) {
                        options.series[0].data =json;
                        chart = new Highcharts.Chart(options);
                    });
                },6000);
            }
        });
    </script>

    <script>

        $ (document).ready(function () {
            Highcharts.setOptions({
                global: {
                    useUTC:false
                }
            });


            var options= {
                chart:{
                    renderTo: 'windspeed_container',
                    height  : 320,
                    zoomType : 'xy',
                    spacingBottom: 15,
                    spacingTop: 10,
                    spacingLeft: 10,
                    spacingRight: 10,
//                    shadow: {
//                        color: 'blue',
//                        width: 1,
//                        offsetX: 0,
//                        offsetY: 0
//                    },
                },

                title:{
                    text: 'Data AWS SADENG WSAVG2M'
                },
                events:{
                    load: refreshChart()
                },
                tooltip:{
                    labels: {
                        format: '{value:.2f}'
                    },
                    valueSuffix:' m/s'
                },
                xAxis:{
                    type:'datetime'
                },
                yAxis:{
                    labels: {
                        format: 'value:.2f m/s'
                    },
                    type  :'linear',
                    title :{
                        text:'WSAVG2M (m/s)'
                    }
                },
                series:[{
                    name: 'WSAVG2M'
                }]

            }

            $.getJSON("datamaria_windspeed.php", function(json) {
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
            });


            function refreshChart() {
                setInterval(function () {
                    $.getJSON("datamaria_windspeed.php", function (json) {
                        options.series[0].data =json;
                        chart = new Highcharts.Chart(options);
                    });
                },6000);
            }
        });
    </script>

    <style>

        #content-wrapper{
            display:table;
        }

        #content{
            display:table-row;
        }

        #content>div{
            display:table-cell
        }

        /*adding some extras for demo purposes*/
        #content-wrapper{
            width:100%;
            height:100%;
            top:180px;
            left:120px;
            position:absolute;
        }
        #nav{
            width:100px;
            background:;
        }
        #body{
            background:;
        }
    </style>
</head>
<body>


    <h1 style="margin-left: 80px; margin-top: 40px; margin-right: 80px; border-bottom-style: inset; font-family: 'Arial Narrow'; color: darkslategrey">DASHBOARD</h1>
    <p style="margin-left: 80px; font-family: Candara; margin-bottom: 60px">Monitoring AWS Sadeng</p>
<!--    <div id="pressure_container" style=" width: 500px; height: 300px; margin-bottom: 40px; position: absolute;margin-left: 100;margin-right: auto;left: 0;right: 0;">Highchart DPAVG2M</div>-->
<!--    <div id="rain_container" style=" width: 500px; height: 300px; margin-bottom: 40px; position: static;margin-left: auto;margin-right: auto;left: 0;right: 0; ">Highchart PRSUM1M</div>-->
<!--    <div id="humidity_container" style="width: 500px; height: 300px; margin-bottom: 40px; position: absolute;margin-left: auto;margin-right: auto;left: 0;right: 0;">Highchart PRSUM1M</div>-->
<!--    <div id="radiation_container" style="width: 500px; height: 300px; margin-bottom: 40px; position: absolute;margin-left: auto;margin-right: auto;left: 0;right: 0; ">Highchart PRSUM1M</div>-->
<!--    <div id="temperature_container" style="width: 500px; height: 300px; margin-bottom: 40px; position: absolute;margin-left: auto;margin-right: auto;left: 0;right: 0;">Highchart PRSUM1M</div>-->
<!--    <div id="windspeed_container" style=" width: 500px; height: 300px; margin-bottom: 40px; position: absolute;margin-left: auto;margin-right: auto;left: 0;right: 0;">Highchart PRSUM1M</div>-->
<!---->
<!--    <div id="wrap">-->
<!--        <div id="left_col">-->
<!--            <div id="pressure_container" style=" width: 500px; height: 300px; margin-bottom: 40px; position: absolute;margin-left: 100;margin-right: auto;left: 0;right: 0;">Highchart DPAVG2M</div>-->
<!---->
<!--        </div>-->
<!--        <div id="right_col">-->
<!--            <div id="rain_container" style=" width: 500px; height: 300px; margin-bottom: 40px; position: static;margin-left: auto;margin-right: auto;left: 0;right: 0; ">Highchart PRSUM1M</div>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--    <div id="wrap">-->
<!--        <div id="left_col">-->
<!--            <div id="humidity_container" style="width: 500px; height: 300px; margin-bottom: 40px; position: absolute;margin-left: auto;margin-right: auto;left: 0;right: 0;">Highchart PRSUM1M</div>-->
<!---->
<!--        </div>-->
<!--        <div id="right_col">-->
<!--            <div id="radiation_container" style="width: 500px; height: 300px; margin-bottom: 40px; position: absolute;margin-left: auto;margin-right: auto;left: 0;right: 0; ">Highchart PRSUM1M</div>-->
<!---->
<!--        </div>-->
<!--    </div>-->

    <div id="content-wrapper">
        <div id="content">
            <div id="nav">
                <div id="pressure_container" style=" width: 500px; height: 300px; margin-bottom: 60px;">Highchart DPAVG2M</div>
                <div id="rain_container" style=" width: 500px; height: 300px; margin-bottom: 60px; ">Highchart PRSUM1M</div>
                <div id="humidity_container" style="width: 500px; height: 300px; margin-bottom: 60px;">Highchart PRSUM1M</div>
            </div>
            <div id="body">
                <div id="radiation_container" style="width: 500px; height: 300px; margin-bottom: 60px; margin-left: 40px ">Highchart PRSUM1M</div>
                <div id="temperature_container" style="width: 500px; height: 300px; margin-bottom: 60px; margin-left: 40px">Highchart PRSUM1M</div>
                <div id="windspeed_container" style=" width: 500px; height: 300px; margin-bottom: 60px; margin-left: 40px">Highchart PRSUM1M</div>

            </div>
        </div>
    </div>
</body>
</html>