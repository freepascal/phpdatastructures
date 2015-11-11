<?php

// my favorite languages
$favorite_langs = [];
$favorite_langs['Java'] = 1;
$favorite_langs['C/C++'] = 1;
$favorite_langs['Python'] = 1;
$favorite_langs['PHP'] = 1;
$favorite_langs['FreePascal'] = 1;

// computer languages a hacker should know
$must_master_langs = [];
$must_master_langs['Java'] = 1;
$must_master_langs['Python'] = 1;
$must_master_langs['C/C++'] = 1;
$must_master_langs['Perl'] = 1;
$must_master_langs['PHP'] = 1;

// check if item exists
echo sprintf("isset: %s\n", isset(
		$favorite_langs['Java']
	)
);

// union
print_r(
	$favorite_langs + $must_master_langs
);

// intersection
print_r(
	array_intersect_key($favorite_langs, $must_master_langs)
);	

// complement
print_r(
	array_diff_key($favorite_langs, $must_master_langs)
);

print_r(
	array_diff_key($favorite_langs, $must_master_langs)	+ array_diff_key($must_master_langs, $favorite_langs)	
);

print_r(
	array_diff_key($favorite_langs + $must_master_langs, array_intersect_key($favorite_langs, $must_master_langs))
);


?>
