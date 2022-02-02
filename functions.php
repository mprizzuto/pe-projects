<?php 
// generates skill list for homepage
function generateSkills(array $skills) {
	foreach ($skills as $key => $value) 
		echo "<li>" . "<span class='language'>$key</span> " . $value . "</li>";
	}

	// // generate the meta data for each page
	// function generateMeta(array $data) {

	// }
?>

<?php function generateMeta(string $title, string $description, string $image) { //generate the meta data ?>
	<title><?=$title?></title>

  <meta name="description" content="<?=$description?>">

  <meta property="og:image" content="<?=$image?>">
<?php } ?>