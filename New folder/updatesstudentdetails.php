<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html>
    
<head>
    <title>Placement Record System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>

<style>
    
    
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #ffffff ;
       
    }
    body {
  background-color: #ffffff;
  
  
}
    .navbar-form{
    margin-right: 0;
    margin-left: 0;
    border: 0;
    
}
    .navbar-default {
    background-color: #f1da09;
    height:50px;
    font-size: 1.5rem;
}

    .user_card {
        position:relative;
        height: 450px;
        width: 960px;
        margin-top: -90px;
        margin-left:30px;
        margin-bottom: 15px;
        background:linear-gradient(to right,#581845,#900C3F,#C70039,#F04B62,#ED5A6E);
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 5px;
    }
    .tab {
             margin-left: 1.5em
        }
    .brand_logo_container {
       
        height: 170px;
        width: 170px;
        left: -250px;
        top: -75px;
        margin-left:-60px;
        border-radius: 50%;
        
    }
    .brand_logo {
        height: 150px;
        width: 150px;
        border-radius: -10%;
        margin-left:-40px;
        border: 2px solid white;
        
    }
    .form_container {
        margin-top: 5px;
    }
    .login_btn {
        width: 200px;
        background:white !important;
        color: black !important;
        font-size: 1.5rem;
    }
    .login_btn:focus {
        box-shadow: none !important;
        outline: 10px !important;
    }
    .login_container {
        padding: 5 0rem;
    }
    .input-group-text {
        background: #c0392b !important;
        color: white !important;
        border: 0 !important;
        border-radius: 0.25rem 0 0 0.25rem !important;
    }
    .input_user,
    .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #c0392b !important;
    }
    .navbar .nav-item i {
    font-size: 10px;
}
.mid_details
{
    width:900px;
    height:400px;
    background:#FBF1F3;
   border-radius: 7% 0% 0% 8% / 49% 10% 10% 52% ; 
   display:flex;
   flex-direction:column;
   justify-content:center;
   text-align:center;
}
input
   {
       width:290px;
       padding:5px;
       outline:none;
       border-radius:1px solid grey;
       border-radius:5px;

   }
   select 
   {
      padding:5px;
       outline:0px;
       border-radius:3px solid grey;
       border-radius:5px;
       border:bold;
   }
   label
   {
     font-family:'Muli';
   
   }
   .right_div
   {
       margin-top:20px;
       display:flex;
       justify-content:space-around;
       text-align:center;
   }
   #registerid input
   {
       width:100px;
       border-radius:10px;
       color:white;
       background:#310B8E;
   }

.site-footer
{
  background-color:#000000;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#ffffff;
}
.site-footer hr
{
  border-top-color:rgb(255, 255, 255);
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#ffffff;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#ffffff
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#050505
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}


</style>
</head>
<body>
    
    <nav class="navbar-default  navbar-expand-lg navbar-light">
          
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                
                <div class="navbar-nav ml-auto">
                
                   
                    <ul id="menu" >
                        <a class="tab">Home </a>
                        <a class = "tab">Events </a> 
                        <a class = "tab">Statistics </a> 
                        <a href="viewinsert.php" class = "tab">Records </a>  
                        <a class = "tab">Contact </a> 
                      <a class = "tab"></p>
                      </ul>
                </div>      
            </div>
        </nav>
      
        <div class="container h-100">
            
            <div class="brand_logo_container">
               <a><img src="https://vesittpc.ves.ac.in/images/cropped-favicon.png" class="brand_logo" alt="Logo" >
                 <b>Placement Record System</b></a>
            </div>
        
                
           <!--details of student form starts here-->
        
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                
                <div class="d-flex justify-content-center form_container">
                   <div class="mid_details">
                   
                   <div class="headright">
                   <h2 >Enter Student's Details</h2>
                   </div>
                   <form method="POST">
                   <?php

                  include 'connection.php';

                   $id=$_GET['idupd'];

                   $showquery="select * from `placementrecord` where ID=($id)";

                   $showdata=mysqli_query($con,$showquery);

                   $arrdata=mysqli_fetch_array($showdata);


                     if(isset($_POST['submits']))
                   {
                    $id=$_GET['idupd'];

                          /*insert data into databse*/
                        $Year=$_POST['year'];
                      $Name=$_POST['name'];
                   $Interest=$_POST['placement'];
                       $Eligible=$_POST['eligible'];
                    $Branch=$_POST['branch'];
                    $Subbranch=$_POST['subbranch'];
                    $Email=$_POST['email'];
                    $Cgpa=$_POST['cgpa'];
                    $Kt=$_POST['kts'];
                      $Placed=$_POST['placed'];

        //$insertquery =" INSERT INTO `placementrecord`(`Year`,`Name`,`Branch`,`Sub-Branch`,`Email Id`,`CGPA`,`KTs`,`Interested`,`Eligible`,`Placed`) values('$Year','$Name','$Branch','$Subbranch','$Email','$Cgpa','$Kt','$Interest','$Eligible','$Placed') ";

        $query="UPDATE `placementrecord` SET `ID`=$id,`Year`='$Year',`Name`='$Name',`Branch`='$Branch',`Sub-Branch`='$Subbranch',`Email Id`='$Email',`CGPA`='$Cgpa',`KTs`='$Kt',`Interested`='$Interest',`Eligible`='$Eligible',`Placed`='$Placed' where ID=$id";
         $res= mysqli_query($con,$query);

        if($res)
        {
        ?>
        <script>
            alert("Data updated");
        </script>
        <?php
       }
       else
      {
        ?>
        <script>
           alert("Data not updated");
         </script>
         <?php
       }
         /*insert data into database ends*/
     
              }

                    ?>


<!--php ends-->
                     <div class="right_div">
                   
                     
                   
                    <div class="left_ofright" >
                      
                          <label>Year</label>
                          <input type="text" name="year" value="<?php echo $arrdata['Year']; ?>" placeholder="Enter year" required/><br><br>
                          <label>Name</label>
                          <input type="text" name="name" value="<?php echo $arrdata['Name']; ?>" placeholder="Enter name" required/><br><br>
                         
                         <label>Interested</label>
                         <select  name="placement" value="<?php echo $arrdata['Interested']; ?>">
                                 <option value="Placement" >Placement</option>
                                 <option value="Further Studies">Further Studies</option>
                            </select><br><br>

                           
     
                            <label>Eligible</label>
                          <select  name="eligible" value="<?php echo $arrdata['Eligible']; ?>">
                                 <option value="YES" >YES</option>
                                 <option value="No">No</option>
                            </select><br><br>
                        
                           
                          

                    </div>
                    <div class="right_ofright">
                    <label>Branch</label>
                          <select  name="branch" value="<?php echo $arrdata['Branch']; ?>">
                                 <option value="BE" >BE</option>
                                 <option value="MCA">MCA</option>
                            </select>
                            <label>Sub-Branch</label>
                          <select  name="subbranch" value="<?php echo $arrdata['Sub-Branch']; ?>">
                                 <option value="Computer Science">Computer Science</option>
                                 <option value="Information Technology">Information Technology</option>
                                 <option value="Electronics & Telecommunication">Electronics & Telecommunication</option>
                                 <option value="Electrical Engineering">Electrical Engineering</option>
                            </select><br><br>

                            <label>Email ID</label>
                          <input type="text" name="email" value="<?php echo $arrdata['Email Id']; ?>"  placeholder="Enter email id" required/><br><br>

                          <label>CGPA</label>
                          <input type="text" name="cgpa" value="<?php echo $arrdata['CGPA']; ?>" placeholder="CGPA" style="width:100px" required/>
                          
                          <label>KTs</label>
                          <input type="text" name="kts" value="<?php echo $arrdata['KTs']; ?>"  placeholder="" style="width:100px" required/><br><br>

                          <label>Placed/Non-Placed</label>
                          <input type="text" name="placed" value="<?php echo $arrdata['Placed']; ?>" placeholder="Company Name" required/>
                          

                         
                       
                          
                    </div>
                   
            </div>
            <div id="registerid">
          
            <input type="submit" name="submits" value="Update">
            </div>
            </form>
                   </div>
                </div>
        
                
            </div>
        </div>
    </div>
   <!--details end here--> 
<!--footer starts here-->
    <footer class="site-footer">

    <div class="container">

        <div class="row">

                
            <div class="col-xs-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li> <a>  </a></li>
                <li><a >Home</a></li>
                <li><a >Events</a></li>
                <li><a >Statistics</a></li>
                <li><a >Records</a></li>
                <li><a >Contact</a></li>
              </ul>
            </div>
  

            <div class="col-xs-6 col-md-3">
              <h6>Other Links</h6>
              <ul class="footer-links">
                <li><a  >Complaints</a></li>
                <li><a >Edugrievance</a></li>
                <li><a >Students and Faculty</a></li>
                <li><a >Feedback</a></li>
                <li><a >Nptel</a></li>
                <li><a >Privacy Policy</a></li>
              </ul>
            </div>

    
            <div class="col-md-5 col-sm-6 col-xs-12">
                <h6>Social Links</h6>
                <ul class="footer-links">
                     <li><a href="#"><i class="fa fa-facebook-square fa-lg" style="margin-right: 5px; " aria-hidden="true"></i>Facebook</a></li>
                    <li><a href="#"><i class="fa fa-instagram  fa-lg" style="margin-right: 5px;" aria-hidden="true"></i>Instagram</a></li>
                    <li><a href="#"><i class="fa fa-twitter-square  fa-lg" style="margin-right: 5px;" aria-hidden="true"></i>Twitter</a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square  fa-lg" style="margin-right: 5px;" aria-hidden="true"></i>LinkedIn</a></li>
                     <li><a href="#"><i class="fa fa-youtube-square  fa-lg" style="margin-right: 5px;" aria-hidden="true"></i>YouTube</a></li>
                 </ul>
            </div>


            <div class="col-sm-12 col-md-6">
                <div class="col-md-16">
                    <img src="http://vesittpc.ves.ac.in/images/newicon.png" style="max-height: 50px;" alt="VESIT">
                    <b>Vivekanand Society's Institute Of Technology</b>
                </div>
                <p class="text-justify">Address:<br>
                    Hashu Advani Memorial Complex,<br> 
                    Collector's Colony Chembur, <br>
                    Mumbai, Maharashtra 400074</p>
                </div>

            </div>

        </div> 
     </div>

  
    
        <div class="container">

            <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text"> &copy; VESIT TPC, Developed and Maintained by VESIT Student and Staff Team.
                </p>
              </div>
    

            </div>
          </div>
     
    </footer>
</body>
</html>