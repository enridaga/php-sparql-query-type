<?php
include("sparql-query-type-function.inc");

$d = "./test";
$files = array_diff(scandir($d), array('.', '..'));

foreach($files as $f){
	$types = SPARQLQueryType::guess(file_get_contents($d . "/" . $f));
	echo $f . " -- " . join(',',$types) . " -- passed? " . ( in_array(explode('-',$f)[0], $types) ? "true" : "false" ) ."\n";
}