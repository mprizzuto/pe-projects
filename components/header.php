<!doctype html>
<html lang="en">
  <?php 
  require "components/head.php";
  require "data/skills.php";
  require "functions.php";

  $getPage = $_GET["page"] ?? "homepage";
  formatInput($getPage);

  //add meta based on query string
  switch($getPage) {
    case "projects":
      generateMeta("projects", "welcome to the  projects page", "./images/project.jpg");
      break;

    case "goals":
      generateMeta("goals", "welcome to the  goals page", "./images/goal.jpg");
      break;

      case "resume":
      generateMeta("resume", "welcome to the resume page", "./images/resume.jpg");
      break;

    default:
      generateMeta("homepage", "welcome to the  homepage", "./images/home.jpg");
  }

  ?>
  <body>
    <?php require "./components/nav.php";?>
    <main class="<?=$getPage?>">
      <article>
        
      
  