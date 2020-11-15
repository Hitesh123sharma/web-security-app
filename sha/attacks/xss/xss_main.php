<html>
<title>Cross Site Scripting (XSS)</title>
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
    <h3 class="w3-padding-50"> <a href="../../index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><b>SHA <br>HACKS<br>SIMULATOR</b></a> </h3>
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

  <center><h1>Cross-Site Scripting (XSS)</h1></center>
 <br><br>

<section class="content">

<span id="c"><b>What is Cross-Site Scripting (XSS)?</b></span><br>

<p>Cross-Site Scripting (XSS) are a type of injection, in which malicious scripts are injected into otherwise benign and trusted web
  sites. XSS occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script,
  to a different end user. Flaws that allow these to succeed are quite widespread and occur anywhere a web application uses input 
  from a user within the output it generates without validating or encoding it. An attacker can use XSS to send a malicious script
  to an unsuspecting user. The end user’s browser has no way to know that the script should not be trusted, and will execute the
  script. Because it thinks the script came from a trusted source, the malicious script can access any cookies, session tokens, 
  or other sensitive information retained by the browser and used with that site. These scripts can even rewrite the content of 
  the HTML page. For more details on the different types of XSS flaws.</p><br>
 
 <span id="c"><b>What is the vulnerability?</b></span><br>
 
 <p>Cross-Site Scripting (XSS) are a type of injection, in which malicious scripts are injected into otherwise benign and trusted
  web sites. XSS occur when an attacker uses a web application to send malicious code, generally in the form of a browser side 
  script, to a different end user. Flaws that allow these to succeed are quite widespread and occur anywhere a web application 
  uses input from a user within the output it generates without validating or encoding it. An attacker can use XSS to send a 
  malicious script to an unsuspecting user. The end user’s browser has no way to know that the script should not be trusted, 
  and will execute the script. Because it thinks the script came from a trusted source, the malicious script can access any 
  cookies, session tokens, or other sensitive information retained by the browser and used with that site. These scripts can 
  even rewrite the content of the HTML page. For more details on the different types of XSS flaws.</p><br>

<span id="c"><b>Attack Vectors</b></span><br>

<p>Attacker sends text-based attack scripts that exploit the interpreter in the browser. Almost any source of data can be an 
  attack vector, including internal sources such as data from the database. XSS is the most prevalent web application security 
  flaw. XSS flaws occur when an application includes user supplied data in a page sent to the browser without properly validating
  or escaping that content. Detection of most Server XSS flaws is fairly easy via testing or code analysis. Client XSS is very 
  difficult to identify.</p><br>

<span id="c"><b>What an attacker can do?</b></span><br>

<p>If a malicious user is able to execute scripts on an unsuspecting user's web browser because of a vulnerable web application.
 Then the malicious user can redirect him/her to some other website using document.location or access cookies using document.cookies
 or create fake page using HTML to grab sensitive information like user credentials. And the worst of all is exploiting the web
 browser to gain remote code execution or drop a malware. Severity of this vulnerability is critical because it can be utilized
 by a malicious user to execute huge kinds of scripts on a client’s web browser.</p><br>


<p><span id="c"><b>Types of XSS:</b></span><br>
<ol>
<li> Reflected XSS</li>
<li> Stored XSS</li>
<li> DOM based XSS</li>
</ol>
<br>
<ol>
<li> <b>Reflected XSS</b><br>
Reflected XSS occurs when user input is immediately returned by a web application in an error message, search result, or any 
other response that includes some or all of the input provided by the user as part of the request, without that data being made 
safe to render in the browser, and without permanently storing the user provided data. In some cases, the user provided data may
 never even leave the browser.</li><br>

<li> <b>Stored XSS</b><br>
Stored XSS generally occurs when user input is stored on the target server, such as in a database, in a message forum, visitor 
log, comment field, etc. And then a victim is able to retrieve the stored data from the web application without that data being 
made safe to render in the browser. With the advent of HTML5, and other browser technologies, we can envision the attack payload
ng permanently stored in the victim’s browser, such as an HTML5 database, and never being sent to the server at all.</li><br>

<li> <b>DOM based XSS</b><br>
DOM stands for Document Object Model. This XSS type is exactly what its name suggests. A web application suffers from this type
of XSS when it cannot filter the user input which is further used by a script in the page. This vulnerability allows an attacker
to modify the document object model of the web browser. The main difference between this type of XSS and others is that in other
XSS types the injection string is sent to the server and the response from the server contains the injection string. But in DOM 
based XSS the injection string is NOT present in the response from server. The injection string is used by a script in page 
which causes unexpected behavior from the web application.</li></p>

</section>
 <!-- page end -->
</div>


<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";`                                                                                                                                                        `                                                                                                                                                                                               
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
 <!-- page end -->
</div>


<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";`                                                                                                                                                        `                                                                                                                                                                                               
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