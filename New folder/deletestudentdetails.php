<?php

include 'connection.php';

$idfordel=$_GET['iddel'];

$deletequery = " delete from `placementrecord` where ID=$idfordel ";

$query = mysqli_query($con,$deletequery);

if($query)
{
    ?>
    <script>
        alert('Delete successfully');
        location.replace("viewinsert.php");
        </script>
        <?php
}
else
{
    ?>
    <script>
       alert('Delete not successful');
       
       </script>
       <?php
}
header('location:viewinsert.php');

?>