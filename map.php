<?php

$time_start = microtime(true);

// map 
$favorite_langs = array(
	'Java' => 'Java',
	'C/C++' => 'C/C++',
	'Python' => 'Python'
);

$must_master_langs = array(
	'PHP' => 'PHP',
	'Perl' => 'Perl',
	'Python' => 'Python'
);

// don't use array_merge() for map
$time_start = @microtime(true);
array_merge($favorite_langs, $must_master_langs);
echo 'Time: '. number_format(microtime(true) - $time_start, 7). "\n";

$time_start = microtime(true);
$favorite_langs + $must_master_langs;
echo 'Time: '. number_format(microtime(true) - $time_start, 7). "\n";

$map = $favorite_langs + $must_master_langs;

foreach($map as $key => $value) {
	echo sprintf("[%s]: %s\n",
		$key,
		$value
	);
}

?>
