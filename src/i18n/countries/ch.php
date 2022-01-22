<?php

return [
    'iso_code' => 'CH',
    'iso_code_3l' => 'CHE',
    'iso_code_num' => '756',
    'name' => 'Switzerland',
    'official' => 'Swiss Confederation',
    'native' => null,
    'continent' => 'EU',
    'subregion' => 'Western Europe',
    'capital' => ['Bern'],
    'currencies' => ['CHF'],
    'languages' => ['de', 'fr', 'it'],
    'dialing_code' => 41,
    'ethnicity' => 'Swiss',
    'states' => [
        [
            'name' => 'Aargau',
            'iso_code' => 'AG',
        ],
        [
            'name' => 'Appenzell Ausserrhoden',
            'iso_code' => 'AR',
        ],
        [
            'name' => 'Appenzell Innerrhoden',
            'iso_code' => 'AI',
        ],
        [
            'name' => 'Basel-Landschaft',
            'iso_code' => 'BL',
        ],
        [
            'name' => 'Basel-Stadt',
            'iso_code' => 'BS',
        ],
        [
            'name' => 'Bern',
            'iso_code' => 'BE',
        ],
        [
            'name' => 'Fribourg',
            'iso_code' => 'FR',
        ],
        [
            'name' => 'Geneva',
            'iso_code' => 'GE',
        ],
        [
            'name' => 'Glarus',
            'iso_code' => 'GL',
        ],
        [
            'name' => 'Graub&uuml;nden',
            'iso_code' => 'GR',
        ],
        [
            'name' => 'Jura',
            'iso_code' => 'JU',
        ],
        [
            'name' => 'Luzern',
            'iso_code' => 'LU',
        ],
        [
            'name' => 'Neuch&acirc;tel',
            'iso_code' => 'NE',
        ],
        [
            'name' => 'Nidwalden',
            'iso_code' => 'NW',
        ],
        [
            'name' => 'Obwalden',
            'iso_code' => 'OW',
        ],
        [
            'name' => 'Schaffhausen',
            'iso_code' => 'SH',
        ],
        [
            'name' => 'Schwyz',
            'iso_code' => 'SZ',
        ],
        [
            'name' => 'Solothurn',
            'iso_code' => 'SO',
        ],
        [
            'name' => 'St. Gallen',
            'iso_code' => 'SG',
        ],
        [
            'name' => 'Thurgau',
            'iso_code' => 'TG',
        ],
        [
            'name' => 'Ticino',
            'iso_code' => 'TI',
        ],
        [
            'name' => 'Uri',
            'iso_code' => 'UR',
        ],
        [
            'name' => 'Valais',
            'iso_code' => 'VS',
        ],
        [
            'name' => 'Vaud',
            'iso_code' => 'VD',
        ],
        [
            'name' => 'Zug',
            'iso_code' => 'ZG',
        ],
        [
            'name' => 'Z&uuml;rich',
            'iso_code' => 'ZH',
        ],
    ],
    'additional_information' => [
        'tld' => ['.ch'],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 41284,
        'latitude' => '47.00000000',
        'longitude' => '8.00000000',
        'is_landlocked' => true,
        'borders' => ['AT', 'FR', 'IT', 'LI', 'DE'],
    ],
    'locale' => [
        'address' => [
            'state' => [
                'label' => 'Canton',
                'required' => false,
            ],
        ],
        'address_format' => "{name}\n{address_1}\n{address_2}\n{postcode} {city}\n{country}",
        'date_format_string' => 'dd/mm/yyyy',
        'date_format' => 'd/m/Y',
        'time_format_string' => '24H',
        'time_format' => 'H:i',
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'de_CH',
        'timezones' => [
            [
                'tz_name' => 'Europe/Zurich',
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
            'regex' => '[A-Za-z]\d{7}\D',
        ],
    ],
];
