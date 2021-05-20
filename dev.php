<?php
include("sparql-query-type-function.inc");

$f = "./test/select-with-bind.sparql";
$f = "./test/select-with-long-string.sparql";

$query = file_get_contents($f);
echo $query;

// $stripped = SPARQLQueryType::stripBetweenCurlyBrackets($query);

// $stripped = SPARQLQueryType::stripQuotedStrings($query);
$stripped = SPARQLQueryType::removeVariables($query);
echo "---";
echo $stripped;
