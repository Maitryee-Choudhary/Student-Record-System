<?php

session_start();
session_destroy();
?>
<script>
alert("Logout Successful");
location.replace("loginpage.php");
</script>
<?php

?>