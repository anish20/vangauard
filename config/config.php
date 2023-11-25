<?php
// // Property declaration of connection
// session_start();

// //localhost
// // $servername = "localhost";
// // $username = "root";
// // $password = "";
// // $database = "vjtech_db";

// //Server
// $servername = "217.21.91.1";
// $username = "u973600001_vjtech";
// $password = "Anish@2022";
// $database = "u973600001_vjtech";

// try {
//   $con= mysqli_connect($servername, $username, $password, $database);
//   // Check connection
// if (!$con) {
//   die("Connection failed: " . mysqli_connect_error());
// } else {
   
// }
  
// } catch (mysqli_sql_exception $exc) {
//     echo $exc->getMessage();
// }

//locall
define("SERVER_PATH",$_SERVER["DOCUMENT_ROOT"]."/vsinfo");
define("SITE_PATH","http://localhost:9000/vanguard");
// define("IMAGE_SERVER_PATH",SERVER_PATH.'/media/images/');
// define("IMAGE_SITE_PATH",SITE_PATH."/media/images/");

// server 
// define("SERVER_PATH",$_SERVER["DOCUMENT_ROOT"]);
// define("SITE_PATH","https://sventerp.com");
// define("IMAGE_SERVER_PATH",SERVER_PATH.'/media/images/');
// define("IMAGE_SITE_PATH",SITE_PATH."/media/images/");





?>