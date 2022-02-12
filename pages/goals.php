<?php 
require "./data/goal-data.php";
// require_once "./functions.php";
?>
<section class="goal-data">
	<inner-column>
	  <ul class="goal-list">
		  <li>
				<strong>personal</strong>
				<ul class="goal-expanded">
					<?php foreach($goalData as $data) {?>
					<?php 
			      for($i = 0; $i < count($data); $i++ ) {
			        echo $data["personal"][$i] ?? null;
			      }
						?>
			    <?php }?>
		  	</ul>
			</li>
		  
			  <li>
			  	<strong>professional</strong>
			  	<ul class="goal-expanded">
			      <?php foreach($goalData as $data) {?>
						<?php 
				    for($i = 0; $i < count($data); $i++ ) {
				      echo $data["professional"][$i] ?? null;
				    }
						?>
				    <?php }?>
				  </ul>
				</li>

			  <li><strong>expectations</strong>
			  	<ul class="goal-expanded">
			  			<?php foreach($goalData as $data) {?>
					<?php 
			    for($i = 0; $i < count($data); $i++ ) {
			      echo $data["expectations"][$i] ?? null ;
			    }
					?>
			    <?php }?>
		  	</ul>
		  </li>

		  <li><strong>at the end of the day</strong>
		  	<?=$data["company"] ?? null?>
		  </li>
		</ul>
	</inner-column>
</section>