<?php session_start(); ?>
 <script src="http://connect.facebook.net/en_US/all.js"></script>
    <script type="text/javascript">
        function logoutFacebook() {
            
           
            
          FB.init({ 
            appId:'1425264661058313', cookie:true, 
            status:true, xfbml:true
          });
          
          
      fbLogoutUser();
        }
        
        
            function fbLogoutUser() {
              FB.getLoginStatus(function(response) {
        if (response && response.status === 'connected') {
            FB.logout(function(response) {
                document.location.reload();
            });
        }
    });
}
      </script>

<?php


if($_SESSION["flag"]==1)
{

    
    ?>
      <script>     logoutFacebook();</script>
        
        <?php
             session_destroy();
}
else{

        session_destroy();
      
}

       
?>
<script type="text/javascript">

window.location = "index.php"

</script>

