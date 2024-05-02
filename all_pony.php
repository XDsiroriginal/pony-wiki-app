<?php
	require_once 'all_pony_bd.php'; 
?>
<?php
	$image_bd = mysqli_query($connect, "SELECT * FROM `all_pony`");
	$image = mysqli_fetch_assoc($image_bd);
?>
<link rel="stylesheet" href="base_style.css">
<div class="skroll_body">
	<div class="sorted_panel">
		<h1 class="sorted_text">
				Главная Шестёрка
		</h1>
	</div>
	<div class="persona_body">
		<div class="img_body">
			<img class="pony_image" src="img/<?php echo $image['image']; ?>.png">
		</div>
	</div>
</div>