<html>
<title>Sensitive Data Exposure</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/main.css">
<link rel="stylesheet" href="../../css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<script type="text/javascript" src="../../ddsmoothmenu.js"></script>
  <script type="text/javascript" src="../../jquery.min.js">
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
    <h3 class="w3-padding-50"> <a href="../../index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><b>SHA<br>HACKS<br>SIMULATOR</b></a> </h3>
  </div>
  
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../../index.php">Home</a>
    </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../../setup.php">Setup/Reset Database</a>
    </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu"> 
 <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../injections/inject.php">Injections</a>
      <ul>
        <li>
          <a href="./../injections/inject.php">About</a>
        </li>
        <li>
          <a href="./../injections/auth.php">Authentication Bypass</a>
        </li>
        <li>
          <a href="./../injections/sql_unsecure.php">Union Based Sql Injection</a>
        </li>
        <li>
          <a href="./../injections/cmdinj.php">Command Injection</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu"> 
     <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../broken/broken_main.php">Broken Authentication and Session Management</a>
      <ul>
        <li>
          <a href="./../broken/broken_main.php">About</a>
        </li>
        <li>
          <a href="./../broken/lesson1.php">Weak login credentials</a>
        </li>
      </ul>
    </li>
  </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">
  <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../xss/xss_main.php">Cross Site Scripting (XSS)</a>
      <ul>
        <li>
          <a href="./../xss/xss_main.php">About</a>
        </li>
        <li>
          <a href="./../xss/xss_r.php">Reflected XSS</a>
        </li>
        <li>
          <a href="./../xss/xss_s.php">Stored XSS</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
  <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../security_misconfiguration/sec.php">Security Miscofiguration</a>
      <ul>
        <li>
          <a href="./../security_misconfiguration/sec.php">About</a>
        </li>
        <li>
          <a href="./../security_misconfiguration/bruteforce.php">Brute Force Attack</a>
        </li>
      </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">    
          <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../senstive_data_exposure/sde.php">Sensitive Data Exposure</a>
      <ul>
        <li>
          <a href="./../senstive_data_exposure/sde.php">About</a>
        </li>
        <li>
          <a href="./../senstive_data_exposure/plaintext.php">User Credentials Sent in Plaintext</a>
        </li>
        <li>
          <a href="./../senstive_data_exposure/plaintext_db.php">Plaintext Passwords in Database</a>
        </li>
      </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">     
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../missing_function/msflac.php">Missing Function Level Access Control</a>
      <ul>
        <li>
          <a href="./../missing_function/msflac.php">About</a>
        </li>
        <li>
          <a href="./../missing_function/unauthenticated.php">Unauthenticated User Access to Admin</a>
        </li>
        <li>
          <a href="./../missing_function/auth/authenticated.php">Authenticated User Access to Admin</a>
        </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../csrf/csrf_main.php">Cross-Site Request Forgery (CSRF)</a>
      <ul>
        <li>
          <a href="./../csrf/csrf_main.php">About</a>
        </li>
        <li>
          <a href="./../csrf/gmail.php">CSRF in Gmail(Logout)</a>
        </li>
        <li>
          <a href="./../csrf/comment.php">CSRF in Comment Box</a>
        </li>
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../unvalidated_redirects/unvalidated.php">Unvalidated Redirects & Forwards</a>
      <ul>
        <li>
          <a href="./../unvalidated_redirects/unvalidated.php">About</a>
        </li>
        <li>
          <a href="./../unvalidated_redirects/manual.php">Manual Redirects</a>
        </li>
        <li>
          <a href="./../unvalidated_redirects/automatic.php">Automatic Redirects</a>
        </li>
        
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../file_inclusion/fi.php">Unrestricted File Upload</a>
      <ul>
        <li>
          <a href="./../file_inclusion/fi.php">About</a>
        </li>
        <li>
          <a href="./../file_inclusion/arbitrary.php">Arbitrary File Upload</a>
        </li>
        
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../click_jacking/click_jack.php">Click Jacking</a>
      <ul>
        <li>
          <a href="./../click_jacking/click_jack.php">About</a>
        </li>
        <li>
          <a href="./../click_jacking/Click.html">Click Jack</a>
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

  <center><h1>Sensitive Data Exposure</h1></center>
 

<section class="content">
<br><br>
<span id="c"><b>What is Sensitive Data Exposure?</b></span><br>

<p>Consider who can gain access to your sensitive data and any backups of that data. This includes the data at rest, in transit and even in your customers’ browsers.
	 Include both external and internal threats. The Sensitive Data can be exposed in the plain text or in any hash format. </p><br><br>
 

<span id="c"><b>Attack Vectors</b></span><br>

<p>Attackers typically don’t break crypto directly. They break something else, such as steal keys, do man-in-the-middle, or steal clear text data off the server, while in transit, or from the user’s browser.  
The most common flaw is simply not encrypting sensitive data. When crypto is employed, weak key generation and management, and weak algorithm usage is common, particularly weak password hashing techniques.
 Browser weaknesses are very common and easy to detect, but hard to exploit on a large scale. External attackers have difficulty detecting server side flaws due to limited access and they are also usually hard to exploit.
 </p><br>


 <span id="c"><b>Are You Vulnerable To 'Sensitive Data Exposure'?</b></span><br>
 <p>The first thing you have to determine is which data is sensitive enough to require extra protection. For example, passwords, credit card numbers, health records, and personal information should be protected. For all such data:
<ul>
<li>Is any of this data stored in clear text long term, including backups of this data?</li>
<li>Is any of this data transmitted in clear text, internally or externally? Internet traffic is especially dangerous.</li>
<li>Are any old / weak cryptographic algorithms used?</li>
<li>Are weak crypto keys generated, or is proper key management or rotation missing?</li>
<li>Are any browser security directives or headers missing when sensitive data is provided by / sent to the browser?</li></p><br>
</ul>

<span id="c"><b>What an attacker can do?</b></span><br>
<ul>
	<li>Password of a user should not be stored in plaintext in database. It should be hashed using a strong hashing algorithm (Note: MD5 is not a strong hashing algorithm anymore MD5 Collision Vulnerabilities)</li>
<li> User's sensitive information like credit card information, bank details, etc. should be stored using strong encryption algorithm and the decryption key should be kept safely and away from the encrypted data.</li>
<li> User's sensitive information like login credentials, bank details, credit information, etc. should not be sent over the network in plaintext. HTTPS should be used for transmitting sensitive details.</li>
<li> Login details can also be sent over the network by hashing the password with a salt (generated by server) when sent from client side. This method is used in places where implementing HTTPS is not possible and HTTP has to be used.</li>
<li> If a web application stores user’s sensitive information like password in plaintext in database and SQL injection is found by a malicious user in this application then all the username-passwords will be fetched and user accounts are compromised.</li>
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