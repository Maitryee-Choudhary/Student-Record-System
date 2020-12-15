<?php 
include('header.php');
?>
<title>Graph Representation</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<?php include('container.php');?>
<div class="container">
    <h2>Bar Graph</h2>  
    <br>
    <div class="graph" id="barChart"></div> 
    <br>    
</div>
<script src="graphite.js"></script>
<script src="bar_chart.js"></script>
<?php include('footer.php');?>