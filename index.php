<?php

require_once 'vendor/autoload.php';

$cvInst = new CountriesVivran\Countries();
$indiaData = $cvInst->getCountryByCode('in');

echo '<pre>';
print_r($indiaData);
echo '</pre>';
