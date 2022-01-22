<?php

return [
    'iso_code' => 'CZ',
    'iso_code_3l' => 'CZE',
    'iso_code_num' => '203',
    'name' => 'Czechia',
    'official' => 'Czech Republic',
    'native' => null,
    'continent' => 'EU',
    'subregion' => 'Central Europe',
    'capital' => [
        'Prague',
    ],
    'currencies' => [
        'CZK',
    ],
    'languages' => [
        'cs',
        'sk',
    ],
    'dialing_code' => 420,
    'ethnicity' => 'Czech',
    'states' => null,
    'additional_information' => [
        'tld' => [
            '.cz',
        ],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 78865,
        'latitude' => '49.75000000',
        'longitude' => '15.50000000',
        'is_landlocked' => true,
        'borders' => [
            'AT',
            'DE',
            'PL',
            'SK',
        ],
    ],
    'locale' => [
        'address' => [
            'state' => [
                'required' => false,
                'hidden' => true,
            ],
        ],
        'address_format' => '{name}\n{address_1}\n{address_2}\n{postcode} {city}\n{country}',
        'date_format_string' => 'yyyy-mm-dd',
        'date_format' => 'Y-m-d',
        'time_format_string' => '24H',
        'time_format' => 'H:i',
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'cs_CZ',
        'timezones' => [
            [
                'tz_name' => 'Europe/Prague',
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
        [
            'name' => 'Passport',
            'type' => 'string',
            'regex' => '/^[0-9]{8}$/',
        ],
    ],
];
