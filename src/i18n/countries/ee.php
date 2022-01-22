<?php

return [
    'iso_code' => 'EE',
    'iso_code_3l' => 'EST',
    'iso_code_num' => '233',
    'name' => 'Estonia',
    'official' => 'Republic of Estonia',
    'native' => null,
    'continent' => 'EU',
    'subregion' => 'Northern Europe',
    'capital' => [
        'Tallinn',
    ],
    'currencies' => [
        'EUR',
    ],
    'languages' => [
        'et',
    ],
    'dialing_code' => 372,
    'ethnicity' => 'Estonian',
    'states' => null,
    'additional_information' => [
        'tld' => [
            '.ee',
        ],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 45227,
        'latitude' => '59.00000000',
        'longitude' => '26.00000000',
        'is_landlocked' => false,
        'borders' => [
            'LV',
            'RU',
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
        'date_format_string' => 'dd-mm-yyyy',
        'date_format' => 'd-m-Y',
        'time_format_string' => '24H',
        'time_format' => 'H:i',
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'et_EE',
        'timezones' => [
            [
                'tz_name' => 'Europe/Tallinn',
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
            'name' => 'Driving License',
            'type' => 'string',
            'regex' => '/^[Ee]{1}[Tt]{1}[0-9]{6}$/',
        ],
    ],
];
