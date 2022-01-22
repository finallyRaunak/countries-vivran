<?php

return [
    'iso_code' => 'BE',
    'iso_code_3l' => 'BEL',
    'iso_code_num' => '056',
    'name' => 'Belgium',
    'official' => 'Kingdom of Belgium',
    'native' => null,
    'continent' => 'EU',
    'subregion' => 'Western Europe',
    'capital' => ['Brussels'],
    'currencies' => ['EUR'],
    'languages' => ['nl', 'fr', 'de'],
    'dialing_code' => 32,
    'ethnicity' => 'Belgian',
    'states' => null,
    'additional_information' => [
        'tld' => ['.be'],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 30528,
        'latitude' => '50.83333333',
        'longitude' => '4.00000000',
        'is_landlocked' => false,
        'borders' => ['FR', 'DE', 'LU', 'NL'],
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
        'default_locale' => 'nl_BE',
        'timezones' => [
            [
                'tz_name' => 'Europe/Brussels',
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
            'regex' => '[A-Za-z][A-Za-z0-9]{7}[^A-Za-z0-9]',
        ],
    ],
];
