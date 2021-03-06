<?php

require_once('models/Lang.php');

$java = new Lang('Java', 'I love it');
$python = new Lang('Python');
$_java = new Lang('Java', 'I love it');

$cpp = new Lang('C/C++');
$perl = new Lang('Perl');
$php = new Lang('PHP');

$set = array();

// dont use array_unique() for set
$set[$java->hashCode()] = $java;
$set[$python->hashCode()] = $python;
$set[$_java->hashCode()] = $_java;
$set[$cpp->hashCode()] = $cpp;
$set[$perl->hashCode()] = $perl;
$set[$php->hashCode()] = $php;

// print set
foreach($set as $key => $value) {
	echo sprintf("[$key] = %s\n", $value->hashCode());
}

echo 'Total items: '. count($set). "\n";

?>
