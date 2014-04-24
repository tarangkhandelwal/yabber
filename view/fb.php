  <div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1425264661058313', // Set YOUR APP ID
      channelUrl : 'http://hayageek.com/examples/oauth/facebook/oauth-javascript/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
 
    FB.Event.subscribe('auth.authResponseChange', function(response) 
    {
     if (response.status === 'connected') 
    {
       // document.getElementById("message").innerHTML +=  "<br>Connected to Facebook";
        //SUCCESS
 
    }    
    else if (response.status === 'not_authorized') 
    {
        //document.getElementById("message").innerHTML +=  "<br>Failed to Connect";
 
        //FAILED
    } else 
    {
       // document.getElementById("message").innerHTML +=  "<br>Logged Out";
 
        //UNKNOWN ERROR
    }
    }); 
 
    };
 
    function Login()
    {
 
        FB.login(function(response) {
           if (response.authResponse) 
           {
                getUserInfo();
            } else 
            {
             console.log('User cancelled login or did not fully authorize.');
            }
         },{scope: 'email,user_photos,user_videos'});
 
    }
 
  function getUserInfo() {
        FB.api('/me', function(response) {
        document.getElementById('fb_name').value =response.name ;
        document.getElementById('fb_username').value =response.username ;
        document.getElementById('fb_email').value =response.email ;
    
        
        document.getElementById('flag').value ="1" ;
        document.getElementById("myForm").submit();

    });
    
    
      FB.api('/me/picture?type=normal', function(response1) {
 
        
        	   document.getElementById('fb_profilepic').value =response1.data.url;         
            
 
    });
    

    }
    function getPhoto()
    {
      
      FB.api('/me/picture?type=normal', function(response) {
 
        var str=""+response.data.url;
        	   document.getElementById('fb_profilepic').value =str ;         
            
 
    });
    
      
     
    }
    function Logout()
    {
        FB.logout(function(){document.location.reload();});
    }
 
  // Load the SDK asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
 
</script>