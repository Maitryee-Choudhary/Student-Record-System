<?php
include_once("db_connect.php");
$sqlQuery = "SELECT company, student FROM population";
$resultset = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
$population = "{";
while( $records = mysqli_fetch_array($resultset) ) {
    $population.='"'.$records['company'].'":'.$records['student'].',';    
}
$population=rtrim($population,",");
$population.="}";
$data[] = $population;
echo json_encode($data);
exit;
?>