
<!DOCTYPE HTML>
<html>
<head>
<title>
NSS SUPPORT SYSTEM
</title>
<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="77668899496-hp8hcaktbcuh3pg3rb9qbc1f1ttfbjpa.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}
.bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("nss5.jpeg");
    min-height: 60%;
}
.menu {
    display: none;
}
</style>
<body>


<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  
  <div class="w3-display-middle w3-center">
    <span class="w3-text-black" style="font-size:90px">NSS SUPPORT SYSTEM</span>
  </div>
</header>

<!--
<center>
<div class="topnav">
<img src="nss5.jpeg" height="500" width="2000">
</div>
<div class="w3-center">
<h4>NSS SUPPORT SYSTEM</h4>

</div>
-->
<br><br>
<center>
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        
        console.log('Full Name: ' + profile.getName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>

</body>
</html>


 

