<?php

return [
    'iso_code' => 'RS',
    'iso_code_3l' => 'SRB',
    'iso_code_num' => '688',
    'name' => 'Serbia',
    'official' => 'Republic of Serbia',
    'native' => NULL,
    'continent' => 'EU',
    'subregion' => 'Southeast Europe',
    'capital' => [
        'Belgrade',
    ],
    'currencies' => [
        'RSD',
    ],
    'languages' => [
        'sr',
    ],
    'dialing_code' => 381,
    'ethnicity' => 'Serbian',
    'states' => NULL,
    'additional_information' => [
        'tld' => [
            '.rs',
            '.срб',
        ],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 88361,
        'latitude' => '44.00000000',
        'longitude' => '21.00000000',
        'is_landlocked' => true,
        'borders' => [
            'BA',
            'BG',
            'HR',
            'HU',
            'XK',
            'MK',
            'ME',
            'RO',
        ],
    ],
    'locale' => [
        'address' => [
            'city' => [
                'required' => true,
            ],
            'postcode' => [
                'required' => true,
            ],
            'state' => [
                'label' => 'District',
                'required' => false,
            ],
        ],
        'address_format' => '{name}\n{address_1}\n{address_2}\n{postcode} {city}\n{country}',
        'date_format_string' => 'yyyy-mm-dd',
        'date_format' => 'Y-m-d',
        'time_format_string' => '24H',
        'time_format' => H:i,
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'sr_RS',
        'timezones' => [
            [
                'tz_name' => 'Europe/Belgrade',
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
