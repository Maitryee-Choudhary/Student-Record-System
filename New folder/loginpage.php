<?php

session_start();

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html>
    
<head>
  <title>VESIT Login Page</title>
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
<style>
  
  
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #ffffff ;
       
    }
    body {
  background-image: url('back.jpg');
}
    .navbar-form{
  margin-right: 0;
  margin-left: 0;
  border: 0;
}
    .navbar-default {
    background-color: #f9fd1d;
    height:50px;
    font-size: 30px;
}
    .user_card {
        position:relative;
        height: 400px;
        width: 350px;
        margin-top: -70px;
        margin-bottom: 15px;
        background :#f39c12;
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
        border-radius: 50%;
        
    }
    .brand_logo {
        height: 150px;
        width: 150px;
        border-radius: -10%;
        border: 2px solid white;
        
    }
    .form_container {
        margin-top: 100px;
    }
    .login_btn {
        width: 100%;
        background: #c0392b !important;
        color: white !important;
    }
    .login_btn:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }
    .login_container {
        padding: 0 2rem;
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
a
{
    color:black;
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

<?php

include 'dbcon.php';

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $email_search="select * from registration where Email='$email'";
    $query=mysqli_query($con,$email_search);
    $email_count=mysqli_num_rows($query);

    if($email_count>0)
    {
       $email_pass=mysqli_fetch_assoc($query);
       $db_pass= $email_pass['Password'];


       $password_decrypt_correct=password_verify($pass,$db_pass);

       if($password_decrypt_correct==$_pass)
       {
            ?>
            <script>
                alert("Login Successful");
               location.replace("Firstpage.php");
              
               
       </script>
       <?php
       
       }
       else
       {
           
        ?>
        <script>
            alert("Password incorrect");
         </script>
        <?php
       }

    }
else
{
   ?>
    <script>
        alert("Email doesn't exist");
    </script>
   <?php
}
}


?>










    
    <nav class="navbar-default  navbar-expand-lg navbar-light">
          
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                
                <div class="navbar-nav ml-auto">
                
                    <ul id="menu" >
                        <a class="tab">Home </a> 
                        <a class = "tab">Statistics </a> 
                        <a class = "tab">Records </a>  
                        <a class = "tab">Contact </a> 
                      <a class = "tab"></p>
                      </ul>
                </div>    
            </div>
        </nav>
      
  <div class="container h-100">
        <div class="brand_logo_container">
            <img src="https://vesittpc.ves.ac.in/images/cropped-favicon.png" class="brand_logo" alt="Logo" >
        </div>
        
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        
        <div class="d-flex justify-content-center form_container">
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
             
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="text" name="email" class="form-control input_user" value="" placeholder="email">
            </div>

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="pass" class="form-control input_pass" value="" placeholder="password">
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox"  class="custom-control-input" id="customControlInline">
                <label class="custom-control-label" for="customControlInline">Remember me</label>
              </div>
            </div>
              <div class="d-flex justify-content-center mt-3 login_container">
          <button type="submit" name="submit" class="btn login_btn">Login</button>
                   </div>
                   <div class="d-flex justify-content-center links">
                    <a href="#">Forgot password?</a>
                </div>
          </form>
        </div>
    
        
      </div>
    </div>
    </div>
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

