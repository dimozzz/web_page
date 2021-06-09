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
    $JN = '<a href = "https://www.csc.kth.se/~jakobn/">Jakob Nordstr&#246;m</a>';
    $DI = '<a href = "http://logic.pdmi.ras.ru/~dmitrits">Dmitry Itsykson</a>';
    $EH = '<a href = "http://logic.pdmi.ras.ru/~hirsch">Edward A. Hirsch</a>';
    $AK = '<a href = "https://www.math.ucsd.edu/~aknop/">Alexander Knop</a>';
    $VO = '<a href = "http://logic.pdmi.ras.ru/~oparin">Vsevolod Oparin</a>';
    $MG = '<a href = "https://theory.epfl.ch/mika/">Mika G&#246;&#246;s</a>';
    $PK = '<a href = "http://www.mit.edu/~pritish/">Pritish Kamath</a>';   
    $AG = '<a href = "https://ankit-garg-6.github.io/">Ankit Garg</a>';
    $SB = '<a href = "http://www.math.ucsd.edu/~sbuss/">Sam Buss</a>';
    $RR = '<a href = "https://www.cs.mcgill.ca/~robere/">Robert Robere</a>';
    $KR = '<a href = "https://people.kth.se/~kilianr/">Kilian Risse</a>';
    $GL = '<a href = "https://guillaume-lagarde.github.io/">Guillaume Lagarde</a>';
    $JS = '<a href = "https://www.kth.se/profile/josephsw">Joseph Swernofsky</a>';
    $TP = '<a href = "https://www.cs.toronto.edu/~toni/">Toniann Pitassi</a>';
    $SFDR = '<a href = "http://www.csc.kth.se/~sfdr/">Susanna F. de Rezende</a>';
    $ML = '<a href = "https://www.massimolauria.net/">Susanna F. de Rezende</a>';
    $AN = 'Anastasia Sofronova';
    $MS = 'Mikhail Slabodkin';
    $DS = 'Dmitry Sokolov';

    cr_paper(
		"$DS",
        '<a href = "https://eccc.weizmann.ac.il/report/2021/076/"> "Pseudorandom Generators, Resolution and Heavy Width"</a>,',
		'In progress'
    );

    cr_paper(
		"$SFDR, $ML, $JN, $DS",
        'The Power of Negative Reasoning,',
		'Appear in proceedings of CCC 2021'
    );

    cr_paper(
		"$AN, $DS",
        '<a href = "https://eccc.weizmann.ac.il/report/2021/028/"> "Branching Programs with Bounded Repetitions and Flow Formulas"</a>,',
		'Appear in proceedings of CCC 2021'
    );

    cr_paper(
		"$SFDR, $MG, $JN, $TP, $RR, $DS",
        '<a href = "https://eccc.weizmann.ac.il/report/2020/064/"> "Automating Algebraic Proof Systems is NP-Hard"</a>,',
		'Appear in proceedings of STOC 2021'
    );

    cr_paper(
		"$SB, $DI, $AK, $DS",
        '<a href = "https://eccc.weizmann.ac.il/report/2020/073/"> "Lower Bounds on OBDD Proofs with Several Orders"</a>,',
		'Appear in ACM Transactions on Computational Logic (TOCL)'
    );

    cr_paper(
		"$DS",
		'<a href = "https://eccc.weizmann.ac.il/report/2020/012/"> "(Semi)Algebraic Proofs over {-1, +1} Variables"</a>,',
		'Appear in proceedings of STOC 2020'
	);

    cr_paper(
		"$SFDR, $JN, $KR, $DS",
		'<a href = "https://eccc.weizmann.ac.il/report/2019/174/"> "Exponential Lower Bounds for Weak Pigeonhole Principle and Perfect Matching Formulas over Sparse Graphs"</a>,',
		'Appear in proceedings of CCC 2020'
	);

    cr_paper(
		"$GL, $JN, $DS, $JS",
		'<a href = "https://doi.org/10.4230/LIPIcs.ITCS.2020.72"> "Trade-offs Between Size and Degree in Polynomial Calculus"</a>,',
		'Appear in proceedings of ITCS 2020'
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