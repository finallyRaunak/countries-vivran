<?php

return [
    'iso_code' => 'AT',
    'iso_code_3l' => 'AUT',
    'iso_code_num' => '040',
    'name' => 'Austria',
    'official' => 'Republic of Austria',
    'native' => null,
    'continent' => 'EU',
    'subregion' => 'Central Europe',
    'capital' => ['Vienna'],
    'currencies' => ['EUR'],
    'languages' => ['de'],
    'dialing_code' => 43,
    'ethnicity' => 'Austrian',
    'states' => null,
    'additional_information' => [
        'tld' => ['.at'],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 83871,
        'latitude' => '47.33333333',
        'longitude' => '13.33333333',
        'is_landlocked' => true,
        'borders' => ['CZ', 'DE', 'HU', 'IT', 'LI', 'SK', 'SI', 'CH'],
    ],
    'locale' => [
        'address' => [
            'state' => [
                'required' => false,
                'hidden' => true,
            ],
        ],
        'address_format' => '{name}\n{address_1}\n{address_2}\n{postcode} {city}\n{country}',
        'date_format_string' => 'dd/mm/yyyy',
        'date_format' => 'd/m/Y',
        'time_format_string' => '24H',
        'time_format' => 'H:i',
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'de_AT',
        'timezones' => [
            [
                'tz_name' => 'Europe/Vienna',
                'gmt_offset' => 3600,
                'gmt_offset_name' => 'UTC+01:00',
                'abbreviation' => 'CET',
                'official_name' => 'Central European Time',
            ],
        ],
    ],
    'financial_institution_format' => [
    ],
    'national_identification_document' => [
    ],
];
