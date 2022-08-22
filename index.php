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