<?php 
require "components/header.php";
?>

<?php
        
//get the pages
switch($getPage) {
  case "projects":
    include "pages/projects.php";
    break;

  case "goals":
    include "pages/goals.php";
    break;

  case "resume":
    include "pages/resume.php";
    break;

  default:
    include "pages/home.php";
}
?>
<?php 
require "components/footer.php";
?>