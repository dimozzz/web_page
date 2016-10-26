<hr class = "separator"/>
<div class = "header">
	<img src = "http://logic.pdmi.ras.ru/~sokolov/files/back.png" class = "back"/>
	<div class = "title">
		Papers, talks and posters
	</div>
</div>

<div class = "container dropdown">
	<div class = "column-2">
		<div class = "table_title">
			Papers
		</div>
		<div>
			<?php
				include("papers.php");
				show_papers();
			?>
		</div>
	</div>
	<div class = "column-2">
		<div class = "table_title">
			Talks
        </div>
		<div>
			<?php
				include("talks.php");
			?>
		</div>
	</div>
</div>
