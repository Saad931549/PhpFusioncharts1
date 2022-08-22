// An array of hash objects which stores data
$arrChartData = array(
    ["Venezuela", "290"],
    ["Saudi", "260"],
    ["Canada", "180"],
    ["Iran", "140"],
    ["Russia", "115"],
    ["UAE", "100"],
    ["US", "30"],
    ["China", "30"]
);

$arrLabelValueData = array();
// Pushing labels and values
for($i = 0; $i < count($arrChartData); $i++) {
    array_push($arrLabelValueData, array(
        "label" => $arrChartData[$i][0], "value" => $arrChartData[$i][1]
    ));
}
//Include FusionCharts core file
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
// Include FusionCharts Theme file
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

// Chart Configuration stored in Associative Array
$arrChartConfig = array(
    "chart" => array(
        "caption" => "Countries With Most Oil Reserves [2017-18]",
        "subCaption" => "In MMbbl = One Million barrels",
        "xAxisName" => "Country",
        "yAxisName" => "Reserves (MMbbl)",
        "numberSuffix" => "K",
        "theme" => "fusion"
    )
);

$arrChartConfig["data"] = $arrLabelValueData;
// JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
$jsonEncodedData = json_encode($arrChartConfig);
?>
<?php
   /* Include the ../src/fusioncharts.php file that contains functions to embed the charts.*/
   include("fusioncharts/fusioncharts-wrapper/fusioncharts.php");
?>

<html>
<head>
<title>FusionCharts | My First Chart</title>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
</head>
<body>
<?php
// Chart Configuration stored in Associative Array
$arrChartConfig = array(
        "chart" => array(
            "caption" => "Countries With Most Oil Reserves [2017-18]",
            "subCaption" => "In MMbbl = One Million barrels",
            "xAxisName" => "Country",
            "yAxisName" => "Reserves (MMbbl)",
            "numberSuffix" => "K",
            "theme" => "fusion"
        )
    );
    // An array of hash objects which stores data
    $arrChartData = array(
["Venezuela", "290"],
["Saudi", "260"],
["Canada", "180"],
["Iran", "140"],
["Russia", "115"],
["UAE", "100"],
["US", "30"],
["China", "30"]
);
\$arrLabelValueData = array();

    // Pushing labels and values
    for($i = 0; $i < count($arrChartData); $i++) {
        array_push($arrLabelValueData, array(
            "label" => $arrChartData[$i][0], "value" => $arrChartData[$i][1]
        ));
    }
    $arrChartConfig["data"] = $arrLabelValueData;

    // JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
    $jsonEncodedData = json_encode($arrChartConfig);

    // chart object
    $Chart = new FusionCharts("column2d", "MyFirstChart" , "700", "400", "chart-container", "json", $jsonEncodedData);

    // Render the chart
    $Chart->render();
    ?>
    <center>
        <div id="chart-container">Chart will render here!</div>
    </center>

</body>
</html>