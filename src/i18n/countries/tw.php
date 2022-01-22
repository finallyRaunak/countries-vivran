<?php

return [
    'iso_code' => 'TW',
    'iso_code_3l' => 'TWN',
    'iso_code_num' => '158',
    'name' => 'Taiwan',
    'official' => 'Republic of China (Taiwan)',
    'native' => null,
    'continent' => 'AS',
    'subregion' => 'Eastern Asia',
    'capital' => [
        'Taipei',
    ],
    'currencies' => [
        'TWD',
    ],
    'languages' => [
        'zh',
    ],
    'dialing_code' => 886,
    'ethnicity' => 'Taiwanese',
    'states' => null,
    'additional_information' => [
        'tld' => [
            '.tw',
            '.台灣',
            '.台湾',
        ],
        'is_independent' => false,
        'is_un_member' => false,
        'area' => 36193,
        'latitude' => '23.50000000',
        'longitude' => '121.00000000',
        'is_landlocked' => false,
        'borders' => null,
    ],
    'locale' => [
        'address' => null,
        'address_format' => '{last_name} {first_name}\n{address_1}\n{address_2}\n{state}, {city} {postcode}\n{country}',
        'date_format_string' => 'mm-dd-yyyy',
        'date_format' => 'm-d-Y',
        'time_format_string' => '24H',
        'time_format' => 'H:i',
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'zh_Hant',
        'timezones' => [
            [
                'tz_name' => 'Asia/Taipei',
                'gmt_offset' => 28800,
                'gmt_offset_name' => 'UTC+08:00',
                'abbreviation' => 'CST',
                'official_name' => 'China Standard Time',
            ],
        ],
    ],
    'financial_institution_format' => [
    ],
    'national_identification_document' => [
        [
            'name' => 'Passport',
            'type' => 'string',
            'regex' => '/^\d{9}|3\d{8}$/',
        ],
    ],
];
