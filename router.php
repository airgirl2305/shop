<?php
//I'm from Router.php!
$url = explode("/", $_SERVER["REQUEST_URI"]);
// $url[0] = 0 is empty

if ($url[1] == "login") {
  //  require_once("login.php"); // connecting files
  $content = file_get_contents("pages/login.php"); // taking data
} else if ($url[1] == "register") {
  $content = file_get_contents("pages/register.html");
} else if ($url[1] == "contact") {
  $content = file_get_contents("pages/contact.html");
} else if ($url[1] == "tracking-order") {
  $content = file_get_contents("pages/tracking-order.html");
} else {
  $content = file_get_contents("pages/index.php");
}

// for ($i = 0; $i < count($url); $i++) {
//   echo $url[$i] . "<hr>"; // . concatination in php
// }

require_once("template.php");
