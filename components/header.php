<!doctype html>
<html lang="en">
  <?php 
  require "components/head.php";
  require "data/skills.php";
  require "functions.php";

  switch($_GET) {
    //TODO. add meta for rest of pages
    default:
    generateMeta("homepage", "welcome to the homepage", "./images/home.jpg");
  }
  ?>
  <body>
    <main>
      <article>
        
<?php 
  //get the pages
  switch($_GET) {

    default:
    include "pages/home.php";
  }
  ?>
  