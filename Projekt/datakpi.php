<?php
include('biblo/httpful.phar');
$url = "https://api.scb.se/OV0104/v1/doris/sv/ssd/START/PR/PR0101/PR0101A/KPItotM";

$postkod = file_get_contents("postanrop.json"); 
$response = \Httpful\Request::post($url)
        ->body($postkod)
        ->send( );
$indata = json_decode($response);

//var_dump($indata);
//header('Content-type:application/json');
//echo($response);
//echo($indata->data[0]->key[0]);
//echo($indata->data[0]->values[0]);

//Namnen på medlemsvariablerna i kolumerna enligt API
$datum = "key";
$kpital = "values";
//Skapar arrayer för lämpliga värden för visualisering
$datumArr = array();
$kpiArr = array();

//En loop för att dela upp x och y arrayer
foreach($indata->data as $kpi)
{
        $datumArr[] = $kpi->$datum[0];
        $kpiArr[] = $kpi ->$kpital[0];
}

//Skapa ett php objekt för att kunna använda Plotly
$data =[
        [
                "x" => $datumArr,
                "y" => $kpiArr,
                "mode"=> "lines"
        ]
  ];

  //Seraliserar json data
$ut = json_encode($data);

 //Lägger in i headern så mottagaren ser att det är json-format
 header('Content-type:application/json');

echo($ut);
?>

