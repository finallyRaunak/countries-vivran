<?php

if (!\defined('CV_VERSION')) {
    \define('CV_VERSION', '0.0.1');
}
if (!\defined('CV_FLAG_IMG_SRC')) {
    \define('CV_FLAG_IMG_SRC', 'https://raw.githubusercontent.com/finallyRaunak/countries-vivran/main/flag/%s/%s.%s');
}
if (!\defined('CV_DEFAULT_ADDRESS_FORMAT')) {
    \define('CV_DEFAULT_ADDRESS_FORMAT', '{name}\n{address_1}\n{address_2}\n{city}\n{state}\n{postcode}\n{country}');
}
if (!\defined('CV_ADDRESS_FIELDS')) {
    \define('CV_ADDRESS_FIELDS', '{"first_name":{"label":"First name","required":true},"last_name":{"label":"Last name","required":true},"country":{"label":"Country \/ Region","required":true},"address_1":{"label":"Street address","placeholder":"House number and street name","required":true},"address_2":{"label":"Apartment, suite, unit, etc.","required":false},"city":{"label":"Town \/ City","required":true},"state":{"label":"State \/ County","required":true},"postcode":{"label":"Postcode \/ ZIP","required":true}}');
}
