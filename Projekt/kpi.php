
<?php
$titelsida = "KPI";
 include("Includes/header.php");
 ?>

<!--  Knappen som laddar grafen!-->
<button type="button" onclick="loadDoc()" name="HEEEEj">LADDA OM</button>
<div id="graf" style="width: 800px; height:400px;"></div>

<script>
	//En funktion för att ladda grafen m.h.a fetch och GET metoden
	function loadDoc()
	{
   	 let url = "datakpi.php";

	fetch(url, {method:"GET"})
		.then(Response=> Response.json())
		.then(plotting)
		.catch(data => console.error("Ett fel inträffa", data));
	}
//En funktion för att plotta data 
function plotting(data)
{
		var layout = {
  title: 'Förändring av konsumentprisindex per år',
  xaxis: {
    title: 'År',
    showgrid: false,
    zeroline: false,
  },
  yaxis: {
    title: 'Konsumentprisindex',
    showline: false
  }
};
    Plotly.newPlot("graf", data, layout, {displayModeBar: false});
	}
</script>
 <?php
 include("Includes/footer.php");
?>



           

