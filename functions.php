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
	<!-- <head> -->
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




