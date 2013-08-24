<?php

// include class needed for flash graph
include("class.pie.flash.php");

mysql_connect ("localhost", "root", "");

$query = "SELECT DISTINCT city_name, COUNT(city_id)
    FROM city
    GROUP BY city_name;";

$result = mysql_db_query ("hermes",$query);

while ($row = mysql_fetch_array ($result)) {
    $city_counts[] = $row["COUNT(city_id)"];
    $city_names[] = $row["city_name"];
}

mysql_free_result ($result);

// Instantiate new object
$graph = new flash_pie($city_counts, "city.swf");

// set graph title (should not exceed about 25 characters)
$graph->pie_title("City Results", 30);

// set graph legend
$graph->pie_legend($city_names);

// show graph
$graph->show();

// free resources
$graph->close();

?>

<?php
<html>
<head>
<meta http=equiv="Expires" content="Fri, Jun 12 1981 08:20:00 GMT">
<meta http=equiv="Pragma" content="no-cache">
<meta http=equiv="Cache-Control" content="no-cache">
<meta http=equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor=white>
<div align=center>
<embed src="city.swf" quality=high loop=false pluginspage="http://www.macromedia.com/
shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
type="application/x-shockwave-flash" width=600 height=300></embed>
</div>
</body>
</html>
?>
