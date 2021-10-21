<?php

require_once 'vendor/autoload.php';

//die(CV_FLAG_IMG_SRC);

$cvInst = new CountriesVivran\Countries();
$indiaData = $cvInst->getCountryByCode('ind');
//$indiaData = $cvInst->cdnFlagPath('svg','in');
//echo json_encode($indiaData, JSON_UNESCAPED_UNICODE);
echo '<pre>';
print_r($indiaData);
echo '</pre>';
