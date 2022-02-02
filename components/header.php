<!doctype html>
<html lang="en">
  <?php 
  require "components/head.php";
  require "data/skills.php";
  require "functions.php";
  ?>
  <body>
    <main class="portfolio-main">
      <article class="portfolio-welcome">
        <header class="welcome">
          <inner-column>
            <h1 class="main-title"><span class="dev-name">Marco Rizzuto</span> Portfolio</h1>

            <p>most projects were inspired by the core <a href="https://perpetual.education" target="_external">Perpetual Eduation</a> curriculum. The skills demonstarted are</p>

            <ul class="skill-list">
              <li><?=generateSkills($skills)?></li>
            </ul>
          </inner-column>
        </header>

  