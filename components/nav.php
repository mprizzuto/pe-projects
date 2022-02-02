<?php 
$navItems = [
"home" => "index.php",
"projects" => "?page=projects",
"goals" => "?page=goals",
"resume" => "?page=resume",
];
?>
<header class="site-header">
	<inner-column>
		<nav>
			<?php foreach($navItems as $item => $href): ?>
				<a href="<?=$href?>"><?=$item?></a>
			<?php endforeach; ?>
		</nav>
	</inner-column>
</header>