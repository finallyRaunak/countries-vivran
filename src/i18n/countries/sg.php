<?php

return [
    'iso_code' => 'SG',
    'iso_code_3l' => 'SGP',
    'iso_code_num' => '702',
    'name' => 'Singapore',
    'official' => 'Republic of Singapore',
    'native' => 'Republic of Singapore',
    'continent' => 'AS',
    'subregion' => 'South-Eastern Asia',
    'capital' => [
        'Singapore',
    ],
    'currencies' => [
        'SGD',
    ],
    'languages' => [
        'en',
        'ms',
        'ta',
        'zh',
    ],
    'dialing_code' => 65,
    'ethnicity' => 'Singaporean',
    'states' => null,
    'additional_information' => [
        'tld' => [
            '.sg',
            '.新加坡',
            '.சிங்கப்பூர்',
        ],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 710,
        'latitude' => '1.36666666',
        'longitude' => '103.80000000',
        'is_landlocked' => false,
        'borders' => null,
    ],
    'locale' => [
        'address' => [
            'state' => [
                'required' => false,
                'hidden' => true,
            ],
            'city' => [
                'required' => false,
            ],
        ],
        'address_format' => null,
        'date_format_string' => 'm/d/yyyy',
        'date_format' => 'j/n/Y',
        'time_format_string' => '24H',
        'time_format' => 'H:i',
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'en_SG',
        'timezones' => [
            [
                'tz_name' => 'Asia/Singapore',
                'gmt_offset' => 28800,
                'gmt_offset_name' => 'UTC+08:00',
                'abbreviation' => 'SGT',
                'official_name' => 'Singapore Time',
            ],
        ],
    ],
    'financial_institution_format' => [
    ],
    'national_identification_document' => [
        [
            'name' => 'Passport',
            'type' => 'string',
            'regex' => '[A-Za-z][0-9]{7}[A-Za-z][^A-Za-z]',
        ],
    ],
];
