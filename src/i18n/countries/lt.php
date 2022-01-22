<?php

return [
    'iso_code' => 'LT',
    'iso_code_3l' => 'LTU',
    'iso_code_num' => '440',
    'name' => 'Lithuania',
    'official' => 'Republic of Lithuania',
    'native' => null,
    'continent' => 'EU',
    'subregion' => 'Northern Europe',
    'capital' => [
        'Vilnius',
    ],
    'currencies' => [
        'EUR',
    ],
    'languages' => [
        'lt',
    ],
    'dialing_code' => 370,
    'ethnicity' => 'Lithuanian',
    'states' => null,
    'additional_information' => [
        'tld' => [
            '.lt',
        ],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 65300,
        'latitude' => '56.00000000',
        'longitude' => '24.00000000',
        'is_landlocked' => false,
        'borders' => [
            'BY',
            'LV',
            'PL',
            'RU',
        ],
    ],
    'locale' => [
        'address' => null,
        'address_format' => null,
        'date_format_string' => 'yyyy.mm.dd',
        'date_format' => 'Y.m.d',
        'time_format_string' => '24H',
        'time_format' => 'H:i',
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'lt_LT',
        'timezones' => [
            [
                'tz_name' => 'Europe/Vilnius',
                'gmt_offset' => 7200,
                'gmt_offset_name' => 'UTC+02:00',
                'abbreviation' => 'EET',
                'official_name' => 'Eastern European Time',
            ],
        ],
    ],
    'financial_institution_format' => [
    ],
    'national_identification_document' => [
        [
            'name' => 'Passport',
            'type' => 'string',
            'regex' => '/^[A-z0-9]{8}$/',
        ],
        [
            'name' => 'Driving License',
            'type' => 'string',
            'regex' => '/^[0-9]{8}$/',
        ],
    ],
];
