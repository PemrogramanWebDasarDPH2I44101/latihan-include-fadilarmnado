<?php
include 'header.html';
session_start();
$nama = $_POST['nama'];
$akses = $_POST['akses'];
$_SESSION['nama'] = $nama;
$_SESSION['akses'] = $akses;


$data = array(
        array("nama" => "fadil",
              "akses" => "admin"

        ),
        array("nama" => "irvin",
              "akses" => "user"

        ),
        array("nama" => "ferdy",
              "akses" => "admin"

        ),
        array("nama" => "ridho",
              "akses" => "user"

        )
);
    if ($_SESSION['nama'] == $data[0]["nama"] && $data[0]["akses"]||$data[2]["nama"] && $data[2]["akses"] ) {
      if ($_SESSION['akses'] == $data[0]["akses"]||$data[2]["akses"]) {

        echo "anda sebagai admin";
      }
      else {
        echo "anda sebagai user";
        header("location: form.html");

      }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <a href="http://localhost/session/hal2.php">halaman 2</a><br>
    <a href="http://localhost/session/hal3.php">halaman 3</a>
  </body>
</html>
