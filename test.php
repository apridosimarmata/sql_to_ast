<?php
namespace PHPSQLParser;

require 'vendor/autoload.php'; // Include the autoloader for the library

use PHPSQLParser\PHPSQLParser;

$sql = "SELECT id, name FROM users WHERE age > 18";

$parser = new PHPSQLParser();
$parsed = $parser->parse($sql);
print_r($parsed[WHERE][2]);
