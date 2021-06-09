<? function start_page($show = 0){

	$main_add = '/home/sokolov/public_html/';
	$st_url = 'https://logic.pdmi.ras.ru/~sokolov/styles';
	$st_text = 'rel = "stylesheet" type = "text/css" media = "all"';
?>


<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />


		<?php			
			echo '<link href = "'.$st_url.'/common.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/small-common.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/header.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/navigation.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/main.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/papers.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/footer.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/table.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/small-table.css" '.$st_text.'>';

			echo '<link href = "'.$st_url.'/phone-common.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/phone-header.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/phone-navigation.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/phone-main.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/phone-footer.css" '.$st_text.'>';
			echo '<link href = "'.$st_url.'/phone-table.css" '.$st_text.'>';
		?>


		<title>Dmitry Sokolov</title>
	</head>
	
	<body>
		<?php
			echo '<header ';
			if($show == 0){
				echo 'class = "hide-header"';
			}else{
				echo 'class = "show-header"';
			}
			echo '>';
			include("$main_add/header.php");
			echo '</header>';
			
			echo '<nav ';
			if($show == 0){
				echo 'class = "hide-nav"';
			}else{
				echo 'class = "show-nav"';
			}
			echo '>';
			include("$main_add/navigation.php");
			echo '</nav>';

			echo '<main ';
			if($show == 0){
				echo 'class = "show-main"';
			}else{
				echo 'class = "hide-main"';
			}
			echo '>';
		?>
<? } ?>


<? function end_page() { ?>
			</main>
			<footer>
				<?php
					$main_add = '/home/sokolov/public_html';
					include("$main_add/footer.php")
				?>
			</footer>
		</body>
	</html>
<? } ?>
