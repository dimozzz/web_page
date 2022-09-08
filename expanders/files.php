<?php function cr_mat($text){
	echo '<div class = "paper">';
	echo "$text";
	echo '</div>';
}

function show_files(){
    cr_mat('<a href = "../files/teaching/exp.pdf"> План</a>');
    cr_mat('<a href = "../files/papers/exp-problems.pdf"> Задачи на бонусы</a>');
    cr_mat('<a href = "../files/papers/exp-ref.pdf"> Литература</a>');
}

?>