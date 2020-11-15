<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,'project');

if(mysqli_select_db($link, 'project'))
{
  echo'<a href="./index.php">';
}
else
{
{
 echo "<center><h1>WELCOME TO SHA HACKS SIMULATOR</h1><br>";  
echo'<body bgcolor="#F8F9F9"><br><br><center>
<a href="reset.php">Create Database</a></center><br><br></body>';
exit("<center><b>Create Database First</b></center>");
}
}
?>

<html>
<title>SHA-Hacks</title>
<head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<script type="text/javascript" src="ddsmoothmenu.js"></script>
  <script type="text/javascript" src="jquery.min.js">
    /***********************************************
    * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
    * This notice MUST stay intact for legal use
    * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
    ***********************************************/
  </script>
  <script type="text/javascript">
    ddsmoothmenu.init({
      mainmenuid: "smoothmenu1", //menu DIV id
      orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
      classname: 'ddsmoothmenu', //class added to menu's outer DIV
      //customtheme: ["#cccc44", "#cccccc"],
      contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $('[ReflectedXSSExecutionPoint]').attr("title", "");
      $('[ReflectedXSSExecutionPoint]').balloon();
      $('[CookieTamperingAffectedArea]').attr("title", "");
      $('[CookieTamperingAffectedArea]').balloon();
    });
  </script>

</head>
<body onload="onLoadOfBody(this);">

<!-- Sidebar/menu -->
<div class="w3-sidebar w3-red w3-collapse w3-top w3-medium w3-padding" style="z-index:3;width:460px;font-weight:bold;" id=""><br>
  
  <div class="w3-container" align="center">
    <h3 class="w3-padding-50"> <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><b>SHA<br>HACKS<br>SIMULATOR</b></a></h3>
  </div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./index.php">Home</a>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./setup.php">Setup/Reset Database</a>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu"> 
  <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/injections/inject.php">Injections</a>
      <ul>
        <li>
          <a href="./attacks/injections/inject.php">About</a>
        </li>
        <li>
          <a href="./attacks/injections/auth.php">Authentication Bypass</a>
        </li>
        <li>
          <a href="./attacks/injections/sql_unsecure.php">Union Based Sql Injection</a>
        </li>
        <li>
          <a href="./attacks/injections/cmdinj.php">Command Injection</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu"> 
     <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/broken/broken_main.php">Broken Authentication and Session Management</a>
      <ul>
        <li>
          <a href="./attacks/broken/broken_main.php">About</a>
        </li>
        <li>
          <a href="./attacks/broken/lesson1.php">Weak login credentials</a>
        </li>
      </ul>
    </li>
  </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">
  <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/xss/xss_main.php">Cross Site Scripting (XSS)</a>
      <ul>
        <li>
          <a href="./attacks/xss/xss_main.php">About</a>
        </li>
        <li>
          <a href="./attacks/xss/xss_r.php">Reflected XSS</a>
        </li>
        <li>
          <a href="./attacks/xss/xss_s.php">Stored XSS</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
  <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/security_misconfiguration/sec.php">Security Miscofiguration</a>
      <ul>
        <li>
          <a href="./attacks/security_misconfiguration/sec.php">About</a>
        </li>
        <li>
          <a href="./attacks/security_misconfiguration/bruteforce.php">Brute Force Attack</a>
        </li>
      </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">    
          <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/senstive_data_exposure/sde.php">Sensitive Data Exposure</a>
      <ul>
        <li>
          <a href="./attacks/senstive_data_exposure/sde.php">About</a>
        </li>
        <li>
          <a href="./attacks/senstive_data_exposure/plaintext.php">User Credentials Sent in Plaintext</a>
        </li>
        <li>
          <a href="./attacks/senstive_data_exposure/plaintext_db.php">Plaintext Passwords in Database</a>
        </li>
      </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">     
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/missing_function/msflac.php">Missing Function Level Access Control</a>
      <ul>
        <li>
          <a href="./attacks/missing_function/msflac.php">About</a>
        </li>
        <li>
          <a href="./attacks/missing_function/unauthenticated.php">Unauthenticated User Access to Admin</a>
        </li>
        <li>
          <a href="./attacks/missing_function/auth/authenticated.php">Authenticated User Access to Admin</a>
        </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/csrf/csrf_main.php">Cross-Site Request Forgery (CSRF)</a>
      <ul>
        <li>
          <a href="./attacks/csrf/csrf_main.php">About</a>
        </li>
        <li>
          <a href="./attacks/csrf/gmail.php">CSRF in Gmail(Logout)</a>
        </li>
        <li>
          <a href="./attacks/csrf/comment.php">CSRF in Comment Box</a>
        </li>
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/unvalidated_redirects/unvalidated.php">Unvalidated Redirects & Forwards</a>
      <ul>
        <li>
          <a href="./attacks/unvalidated_redirects/unvalidated.php">About</a>
        </li>
        <li>
          <a href="./attacks/unvalidated_redirects/manual.php">Manual Redirects</a>
        </li>
        <li>
          <a href="./attacks/unvalidated_redirects/automatic.php">Automatic Redirects</a>
        </li>
        
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/file_inclusion/fi.php">Unrestricted File Upload</a>
      <ul>
        <li>
          <a href="./attacks/file_inclusion/fi.php">About</a>
        </li>
        <li>
          <a href="./attacks/file_inclusion/arbitrary.php">Arbitrary File Upload</a>
        </li>
        
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/click_jacking/click_jack.php">Click Jacking</a>
      <ul>
        <li>
          <a href="./attacks/click_jacking/click_jack.php">About</a>
        </li>
        <li>
          <a href="./attacks/click_jacking/Click.html">Click Jack</a>
        </li>
        
      </ul>
         </li>
      </ul>
</div>

<!-- <br style="clear: left" />  -->
      
</div>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span><b>SHA HACKS SIMULATOR</b></span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:470px;margin-right:40px">

<center><h1>Welcome to SHA HACKS Simulator.</h1></center>

<section class="content">
<br>

<p>SHA HACKS Simulator is a PHP/MySQL based Web Simulator that Covers the Top Ten Attacks of OWASP-2013. The motive of creating the SHA HACKS Simulator is to practice and perform the practicals of OWASP Top 10 - 2013,
 in a legal enviornment. This will help Web Develpers, Students and all the people who want to understand the most common web vulerabilities listed by OWASP.</p><br>

<span id="c"><b>General Instructions</b></span><br>
<ul>
<li>SHA HACKS Simulator contains all the vulnerabilities from OWASP Top 10. Go to through the "About" page of every vulnerability before starting the practical.</li>
<li>To start the SHA-Hacks, you need a localhost Web Platform Server. We recommend you to use XAMPP. XAMPP is a free and open source cross-platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in the PHP and SQL programming languages.</li>
<li>You have to install the latest version of XAMPP first in your Operating System. When completed, open the installed folder of "XAMPP", go to "htdocs" and paste the folder "SHA-Hacks" inside it.</li>
<li>Once copied, Open your Browser and write "localhost/SHA-Hacks" OR "127.0.0.1/SHA-Hacks" in the URL and hit Enter.</li>
<li>You'll find the "Create Database" option. Click on that for creating the database for SHA-Hacks and again go to "localhost/SHA-Hacks" OR "127.0.0.1/SHA-Hacks".</li>
<li>You'll get the FrontEnd of the SHA HACKS Simulator. Enjoy learning how the attacks works.</li>
</ul>  

<span id="c"><b>Default Credentials</b></span><br>s
<ul>
<li>Username : admin <br>  Password : password</li>
<li>Username : admin2 <br>  Password : password2</li>
<li>Username : root <br>  Password : toor</li> 
</ul>

<span id="c"><b>The Team</b></span><br>
<ul>
<li>Hitesh Sharma</li>
<li>Sushant Gupta</li>
</ul>

</section>



 <!-- page end -->
</div>


<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>