<?php
// running autoload file
require_once __DIR__ . "/vendor/autoload.php";

use Mydev\Airlines\Flight;

$flight = new Flight();
$flights = $flight->getFlights('JED', 'CMN');

echo '<pre>';
print_r($flights);
echo '</pre>';