<?php 
// generates skill list for homepage
function generateSkills(array $skills) {
	foreach ($skills as $key => $value) 
		echo "<li>" . "<span class='language'>$key</span> " . $value . "</li>";
	}

	function formatInput($input) {
		echo "<pre>";
		var_dump($input);
		echo "</pre>";
	}
?>

<?php function generateMeta(string $title, string $description, string $image) { //generate the meta data ?>
	<link rel="stylesheet" type="text/css" href="./styles/style.css">
	<title><?=$title?></title>

  <meta name="description" content="<?=$description?>">

  <meta property="og:image" content="<?=$image?>">

<?php } ?>

<?php function generateResume(iterable $resumeData) { ?>

	<?php foreach ($resumeData as $resume): ?>
		<?php foreach ($resume as $key => $value): ?>
			<h2><?=$key?></h2>

			<p><?=$value?></p>
		<?php endforeach ?>
	<?php endforeach ?>
<?php } ?>

<?php function generateGoals(iterable $goalData) {?>
	<ul class="goal-list">
  <?php foreach($goalData as $goals) {?>
    <?php foreach($goals as $key => $value){ ?>
    	<li><strong><?=$key?></strong></li>

    	<li>
    	<ul class="goal-expanded">
    	<?php foreach($value as $subvalue){?>
    		<li><?=$subvalue?></li>
    	<?php }?>
    	</ul>
    	</li>
    <?php } ?>
  <?php }?>
  </ul>
<?php }?>



