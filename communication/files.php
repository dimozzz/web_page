<?php function cr_mat($text){
	echo '<div class = "paper">';
	echo "$text";
	echo '</div>';
}

function show_files(){
    cr_mat('<a href = "../files/teaching/comm.pdf"> Plan</a>');
    cr_mat('<a href = "../files/papers/comm-problems.pdf"> Bonus problems</a>');
    cr_mat('<a href = "../files/papers/comm-ref.pdf"> References</a>');
}

?>