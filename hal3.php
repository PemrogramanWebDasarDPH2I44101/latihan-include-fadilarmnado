<?php
require 'header.html';
session_start();
$_SESSION["nama"] = isset($_POST["nama"]) ? $_POST["nama"] : $_SESSION["nama"];
$_SESSION["akses"] = isset($_POST["akses"]) ? $_POST["akses"] : $_SESSION["akses"];
if ($_SESSION['akses'] == "admin") {
  echo "halaman tidak boleh diakses";
  header("location: form.html");


}else {
echo "sayonara";

}
?>
