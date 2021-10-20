<?php

require_once 'vendor/autoload.php';

//die(CV_FLAG_IMG_SRC);

$cvInst = new CountriesVivran\Countries();
$indiaData = $cvInst->getCountryByCode('ind');
//$indiaData = $cvInst->cdnFlagPath('svg','in');

echo '<pre>';
print_r($indiaData);
echo '</pre>';
