<?php

return [
    'iso_code' => 'CL',
    'iso_code_3l' => 'CHL',
    'iso_code_num' => '152',
    'name' => 'Chile',
    'official' => 'Republic of Chile',
    'native' => null,
    'continent' => 'SA',
    'subregion' => 'South America',
    'capital' => [
        'Santiago',
    ],
    'currencies' => [
        'CLP',
    ],
    'languages' => [
        'es',
    ],
    'dialing_code' => 56,
    'ethnicity' => 'Chilean',
    'states' => null,
    'additional_information' => [
        'tld' => [
            '.cl',
        ],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 756102,
        'latitude' => '-30.00000000',
        'longitude' => '-71.00000000',
        'is_landlocked' => false,
        'borders' => [
            'AR',
            'BO',
            'PE',
        ],
    ],
    'locale' => [
        'address' => [
            'city' => [
                'required' => true,
            ],
            'postcode' => [
                'required' => false,
            ],
            'state' => [
                'label' => 'Region',
            ],
        ],
        'address_format' => '{name}\n{address_1}\n{address_2}\n{state}\n{postcode} {city}\n{country}',
        'date_format_string' => 'dd-mm-yyyy',
        'date_format' => 'd-m-Y',
        'time_format_string' => '24H',
        'time_format' => 'H:i',
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'es_CL',
        'timezones' => [
            [
                'tz_name' => 'America/Punta_Arenas',
                'gmt_offset' => -10800,
                'gmt_offset_name' => 'UTC-03:00',
                'abbreviation' => 'CLST',
                'official_name' => 'Chile Summer Time',
            ],
            [
                'tz_name' => 'America/Santiago',
                'gmt_offset' => -10800,
                'gmt_offset_name' => 'UTC-03:00',
                'abbreviation' => 'CLST',
                'official_name' => 'Chile Summer Time',
            ],
            [
                'tz_name' => 'Pacific/Easter',
                'gmt_offset' => -18000,
                'gmt_offset_name' => 'UTC-05:00',
                'abbreviation' => 'EASST',
                'official_name' => 'Easter Island Summer Time',
            ],
        ],
    ],
    'financial_institution_format' => [
    ],
    'national_identification_document' => [
    ],
];
