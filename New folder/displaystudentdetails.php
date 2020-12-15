<html>
<head>
<title></title>
<?php include 'connection.php'; ?>
<?php include 'links.php'; ?>
<link rel="stylesheet" href="css/style.css">
<style>
    *{
    margin:0;
    padding:0;
   box-sizing:border-box;
}
.main_div
{
    width:100vw;
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content: center;
    text-align:center;
}
.center_div
{
    margin-left:30px;
    width:90vw;
    height:80vh;
    background:#FFC300;
    padding:20px 0 0 0;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
    border-radius:10px;
}
h1
{
    font-size:18px;
    color:#000;
    text-align:center;
    margin-top:-20px;
    margin-bottom:20px;
}
table
{
    border-collapse:collapse;
    background-color:#fff;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
    border-radius: 10px;
    margin:auto;
}
th,td
{
  border:1px solid #f2f2f2;
   padding:8px 30px;
  text-align:center;
  color:grey; 
}
th{
    text-transform:uppercase;
    font-weight:500;
}
td
{
    font-size:13px;
}
.email-style
{
    font-size:14px;
    color:grey;
    display:inline-block;
    background:#f2f2f2;
    -webkit-border-radius:2px;
    -moz-border-radius:2px;
    border-radius:2px;
    line-height:30px;
    padding:0 14px;

}
.post-class
{
    text-transform:uppercase;
}
.fa
{
    font-size:18px;
}
.fa-edit
{
    color:#63c76a;
}
.fa-trash
{
    color:#ff0000;
}
a{
    text-decoration: none;
    display: flex;
    justify-content: center;
    text-align: center;
}
</style>
</head>

<body>

<div class="main_div">

    <h1>Student Details</h1>
    <div class="center_div">
       <div class="table-responsive">

       <table>

       <thead>
          <tr>
             <th>id</th>
             <th>Year</th>
             <th>Name</th>
             <th>Branch</th>
             <th>Sub-Branch</th>
             <th>Email</th>
             <th>CGPA</th>
             <th>KTs</th>
             <th>Interested</th>
             <th>Eligible</th>
             <th>Placed</th>
             <th colspan="2">Operation</th>
          </tr>
       </thead>
       <tbody>
       <?php

             include 'connection.php';

          
            $query = mysqli_query($con,"select * from `placementrecord`");

           
             $numofrows = mysqli_num_rows($query);
             //echo $numofrows;



             while($res = mysqli_fetch_array($query))
            {
               ?>

                   <tr>

                   <td><?php  echo $res['ID']; ?></td>
                  <td><?php echo $res['Year']; ?></td>
                  <td><?php echo $res['Name']; ?></td>
                  <td><?php echo $res['Branch']; ?></td>
                  <td><?php echo $res['Sub-Branch']; ?></td>
                  <td><span class="email-style"><?php echo $res['Email Id']; ?></span></td>
                   <td><?php echo $res['CGPA']; ?></td>
                   <td><?php echo $res['KTs']; ?></td>
                   <td><?php echo $res['Interested']; ?></td>
                   <td><?php echo $res['Eligible']; ?></td>
                   <td><?php echo $res['Placed']; ?></td>
                   <td><a href="updatesstudentdetails.php?idupd=<?php  echo $res['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i></a></td>
                   <td><a href="deletestudentdetails.php?iddel=<?php  echo $res['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash"></i></a></td>
                  </tr>

                  <?php
            }



         ?>

         
       </tbody>
       </table>
       </div>

    </div>

</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>