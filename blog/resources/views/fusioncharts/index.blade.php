<?php
   //include(app_path().'/includes/fusioncharts.php');
?>
<html>

   <head>
    <title>FusionCharts XT - Simple Column 2D Chart</title>
    <script type="text/javascript" src="{{ asset('js/fusioncharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fusioncharts.charts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fusioncharts.theme.fint.js') }}"></script>
    <link type="text/css" href="{{ asset('css/style.css') }}"  rel="stylesheet">
    
   </head>
   <body>
    <?php
        $barChart = new FusionCharts("bar2d", "myFirstChart" , 600, 400, "chart-container", "json",
            ' {
                "chart": {
                    "caption": "What kind of apps are you building?",
                    "numberSuffix": "%",
                    "paletteColors": "#876EA1",
                    "useplotgradientcolor": "0",
                    "plotBorderAlpha": "0",
                    "bgColor": "#FFFFFFF",
                    "canvasBgColor": "#FFFFFF",
                    "showValues":"1",
                    "showCanvasBorder": "0",
                    "showBorder": "0",
                    "divLineColor": "#DCDCDC",
                    "alternateHGridColor": "#DCDCDC",
                    "labelDisplay": "auto",
                    "baseFont": "Assistant",
                    "baseFontColor": "#153957",
                    "outCnvBaseFont": "Assistant",
                    "outCnvBaseFontColor": "#8A8A8A",
                    "baseFontSize": "13",
                    "outCnvBaseFontSize": "13",
                    "yAxisMinValue":"40",
                    "labelFontColor": "#8A8A8A",
                    "                            captionFontColor": "#153957",
                    "captionFontBold": "1",
                    "captionFontSize": "20",
                    "subCaptionFontColor": "#153957",
                    "subCaptionfontSize": "17",
                    "subCaptionFontBold": "0",
                    "captionPadding": "20",
                    "valueFontBold": "0",
                    "showAxisLines": "1",
                    "yAxisLineColor": "#DCDCDC",
                    "xAxisLineColor": "#DCDCDC",
                    "xAxisLineAlpha": "15",
                    "yAxisLineAlpha": "15",
                    "toolTipPadding": "7",
                    "toolTipBorderColor": "#DCDCDC",
                    "toolTipBorderThickness": "0",
                    "toolTipBorderRadius": "2",
                    "showShadow": "0",
                    "toolTipBgColor": "#153957",
                    "theme": "fint"
                  },

                "data": [{
                    "label": "Consumer general",
                    "value": "60.7"
                  }, {
                    "label": "Enterprise internal app",
                    "value": "41.7"
                  }, {
                    "label": "Progressive Web Apps",
                    "value": "25.1"
                  }, {
                    "label": "Consumer social network",
                    "value": "24"
                  }, {
                    "label": "Desktop web apps",
                    "value": "18.5"
                  }, {
                    "label": "Desktop apps (electron, etc)",
                    "value": "12.3"
                  }, {
                    "label": "Consumer chat",
                    "value": "12.2"
                  }, {
                    "label": "Other",
                    "value": "4.5"
                }]
            }');
        $barChart->render();
    ?>
    <div id="chart-container">Fusion Charts will render here</div>
   </body>
</html>