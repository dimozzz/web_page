<?php function cr_paper($au, $text, $jour){
	echo '<div class = "paper">';
	echo '<div class = "authors">';
	echo "$au";
	echo '</div>';
	echo '<div class = "title">';
	echo "$text";
	echo '</div>';
	echo '<div class = "journal">';
	echo "$jour";
	echo '</div>';
	echo '</div>';
}

function show_papers(){
	$DI = '<a href = "http://logic.pdmi.ras.ru/~dmitrits">Dmitry Itsykson</a>';
	$EH = '<a href = "http://logic.pdmi.ras.ru/~hirsch">Edward A. Hirsch</a>';
	$AK = '<a href = "http://logic.pdmi.ras.ru/~knop">Alexander Knop</a>';
	$VO = '<a href = "http://logic.pdmi.ras.ru/~oparin">Vsevolod Oparin</a>';
	$MG = '<a href = "http://www.cs.utoronto.ca/~mgoos/">Mika G&#246;&#246;s</a>';
	$PK = '<a href = "http://www.mit.edu/~pritish/">Pritish Kamath</a>';
	$AG = '<a href = "https://www.microsoft.com/en-us/research/people/garga/">Ankit Garg</a>';
	$SB = '<a href = "http://www.math.ucsd.edu/~sbuss/">Sam Buss</a>';
    $RR = '<a href = "https://www.cs.toronto.edu/~robere/">Robert Robere</a>';
	$MS = 'Mikhail Slabodkin';
	$DS = 'Dmitry Sokolov';

    cr_paper(
		"$SB, $DI, $AK, $DS",
		'Breaking Through the Reordering Obstacle in OBDD Proof Systems,',
		'In progress'
    );

    cr_paper(
		"$MG, $PK, $RR, $DS",
		'<a href = "https://eccc.weizmann.ac.il/report/2018/163/"> "Adventures in Monotone Complexity and TFNP"</a>,',
		'Appear in proceedings of ITCS 2019'
	);

    cr_paper(
		"$SB, $DI, $AK, $DS",
		'<a href = "https://eccc.weizmann.ac.il/report/2018/041/"> "Reordering Rule Makes OBDD Proof Systems Stronger"</a>,',
		'Appear in proceedings of CCC 2018'
    );

    cr_paper(
		"$AG, $MG, $PK, $DS",
		'<a href = "https://eccc.weizmann.ac.il/report/2017/175/"> "Monotone Circuit Lower Bounds from Resolution"</a>,',
		'Appear in proceedings of STOC 2018'
	);

	cr_paper(
		"$DS",
		'<a href = "https://eccc.weizmann.ac.il/report/2016/202/"> "Dag-like Communication and Its Applications"</a>,',
		'Appear in proceedings of CSR 2017'
	);
	
	cr_paper(
		"$DI, $AK, Andrey Romashchenko, $DS",
		'<a href = "http://drops.dagstuhl.de/opus/volltexte/2017/6991/"> "On OBDD based algorithms and proof systems that dynamically change order of variables"</a>,',
		'Appear in proceedings of STACS 2017'
	);

	cr_paper(
		"$DI, $AK, $DS",
		'<a href = "http://eccc.hpi-web.de/report/2015/174/"> "Complexity of distributions and average-case hardness"</a>,',
		'Appear in proceedings of ISAAC 2016'
	);


	cr_paper(
		"$DI, $VO, $MS, $DS",
		'<a href = "../files/papers/php_res.pdf"> "Tight Lower Bounds on the Resolution Complexity of Perfect Matching Principles"</a>,',
		'Fundamenta Informaticae, vol. 145, no. 3, pp. 229-242, 2016'
	);

	cr_paper(
		"$DI, $AK, $DS",
		'<a href = "http://eccc.hpi-web.de/report/2014/050/"> "Heuristic Time Hierarchies via Hierarchies for Sampling Distributions"</a>,',
		'Appear in proceedings of ISAAC 2015, <a href = "bibtex/heur_sampl.txt">[Bib]</a>'
	);


	cr_paper(
		"$EH, $DS",
		'<a href = "http://eccc.hpi-web.de/report/2014/050/"> "On the probabilistic closure of the loose unambiguous hierarchy"</a>,',
		'Information Processing Letters, Vol. 115(9), pp. 725-730, 2015, <a href = "bibtex/loose_hier.txt">[Bib]</a>'
	);


	cr_paper(
		"$DI, $DS",
		'<a href = "../files/papers/splitting.pdf"> "Lower bounds for splittings by linear combinations"</a>,',
		'In proceedings of MFCS 2014'
	);


	cr_paper(
		"$DI, $DS",
		'<a href = "../files/papers/heuristic.pdf"> "On fast non-deterministic algorithms and short heuristic proofs"</a>,',
		'Fundamenta Informaticae, 132(1):113-129, 2014'
	);

	cr_paper(
		"$DI, Anna Malova, $VO, $DS",
		'<a href = "http://arxiv.org/abs/1412.1124"> "Tree-like resolution complexity of two planar problems"</a>,',
		'CoRR abs/1412.1124, 2014'
	);

	cr_paper(
		"$DI, $DS",
		'<a href = "http://eccc.hpi-web.de/report/2012/141/"> "Lower bounds for myopic DPLL algorithms with a cut heuristic"</a>,',
		'In proceedings of ISAAC 2011'
	);
	
	cr_paper(
		"$DI, $DS",
		'<a href = "../files/papers/Gold_res.pdf"> "The complexity of inversion of explicit Goldreich&#039s function by DPLL algorithms"</a>,',
		'Journal of Mathematical Sciences, 399:88-109, 2012'
	);
}

?>