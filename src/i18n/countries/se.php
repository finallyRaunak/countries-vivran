<?php

return [
    'iso_code' => 'SE',
    'iso_code_3l' => 'SWE',
    'iso_code_num' => '752',
    'name' => 'Sweden',
    'official' => 'Kingdom of Sweden',
    'native' => null,
    'continent' => 'EU',
    'subregion' => 'Northern Europe',
    'capital' => [
        'Stockholm',
    ],
    'currencies' => [
        'SEK',
    ],
    'languages' => [
        'sv',
    ],
    'dialing_code' => 46,
    'ethnicity' => 'Swedish',
    'states' => null,
    'additional_information' => [
        'tld' => [
            '.se',
        ],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 450295,
        'latitude' => '62.00000000',
        'longitude' => '15.00000000',
        'is_landlocked' => false,
        'borders' => [
            'FI',
            'NO',
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
        'date_format_string' => 'dd/mm/yyyy',
        'date_format' => 'd/m/Y',
        'time_format_string' => '24H',
        'time_format' => 'H:i',
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'sv_SE',
        'timezones' => [
            [
                'tz_name' => 'Europe/Stockholm',
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
        [
            'name' => 'Driving License',
            'type' => 'string',
            'regex' => '/^[0-9]{6}-[0-9]{4}$/',
        ],
    ],
];
