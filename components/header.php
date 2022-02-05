<!doctype html>
<html lang="en">
  <?php 
  require "components/head.php";
  require "data/skills.php";
  require "functions.php";

  // conditionally get class for pages, default to homepage class 
  $page = $_POST ? "": "homepage";
  $getPage = $_GET["page"] ?? "homepage";
  formatInput($page);

  switch($_GET) {
    //TODO. add meta for rest of pages
    default:
    generateMeta("homepage", "welcome to the homepage", "./images/home.jpg");
  }

  ?>
  <body>
    <?php require "./components/nav.php";?>
    <main class="<?=$getPage?>">
      <article>
        
      <?php
        
        //get the pages
        switch($getPage) {
          case "projects":
            include "pages/projects.php";
            break;

          default:
            include "pages/home.php";
        }
        ?>
  