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
<!-- TODO-- get head to render properly -->
<?php function generateMeta(string $title, string $description, string $image) { //generate the meta data ?>
	<!-- <head> -->
	<title><?=$title?></title>

  <meta name="description" content="<?=$description?>">

  <meta property="og:image" content="<?=$image?>">
<!-- </head> -->
<?php } ?>