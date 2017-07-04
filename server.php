<?php
	require'SortArr.class.php';
	require'Strategy.class.php';
	require'Bubble.class.php';
	require'CookTailSort.class.php';
	require'SelectionSort.class.php';
	require'ShellSort.class.php';
	require'InsertSort.class.php';
	require'BinarySort.class.php';
	require'QuickSort.class.php';
	
	$arr = array(8,100,79,42,1,2,6,9,5,7,89);
	
	$s = new SortArr(new QuickSort(),$arr);
	$s->getStrategy();
	



?>