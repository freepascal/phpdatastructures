<?php

$heap = new SplMaxHeap();
$heap->insert(10);
$heap->insert(15);
$heap->insert(20);

foreach($heap as $num) {
	echo $num. "\n";
}

?>
