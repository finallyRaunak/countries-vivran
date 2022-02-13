<?php

return [
    'iso_code' => 'AU',
    'iso_code_3l' => 'AUS',
    'iso_code_num' => '036',
    'name' => 'Australia',
    'official' => 'Commonwealth of Australia',
    'native' => 'Commonwealth of Australia',
    'continent' => 'OC',
    'subregion' => 'Australia and New Zealand',
    'capital' => ['Canberra'],
    'currencies' => ['AUD'],
    'languages' => ['en'],
    'dialing_code' => 61,
    'ethnicity' => 'Australian',
    'states' => [
        [
            'name' => 'Australian Capital Territory',
            'iso_code' => 'ACT',
        ],
        [
            'name' => 'New South Wales',
            'iso_code' => 'NSW',
        ],
        [
            'name' => 'Northern Territory',
            'iso_code' => 'NT',
        ],
        [
            'name' => 'Queensland',
            'iso_code' => 'QLD',
        ],
        [
            'name' => 'South Australia',
            'iso_code' => 'SA',
        ],
        [
            'name' => 'Tasmania',
            'iso_code' => 'TAS',
        ],
        [
            'name' => 'Victoria',
            'iso_code' => 'VIC',
        ],
        [
            'name' => 'Western Australia',
            'iso_code' => 'WA',
        ],
    ],
    'additional_information' => [
        'tld' => ['.au'],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 7692024,
        'latitude' => '-27.00000000',
        'longitude' => '133.00000000',
        'is_landlocked' => false,
        'borders' => null,
    ],
    'locale' => [
        'address' => [
            'city' => [
                'label' => 'Suburb',
            ],
        ],
        'address_format' => '{name}\n{address_1}\n{address_2}\n{city} {state} {postcode}\n{country}',
        'date_format_string' => 'dd-mm-yyyy',
        'date_format' => 'd-m-Y',
        'time_format_string' => '12H',
        'time_format' => 'h:i A',
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'en_AU',
        'timezones' => [
            [
                'tz_name' => 'Australia/Perth',
                'gmt_offset' => 28800,
                'gmt_offset_name' => 'UTC+08:00',
                'abbreviation' => 'AWST',
                'official_name' => 'Australian Western Standard Time',
            ],
            [
                'tz_name' => 'Australia/Eucla',
                'gmt_offset' => 31500,
                'gmt_offset_name' => 'UTC+08:45',
                'abbreviation' => 'ACWST',
                'official_name' => 'Australian Central Western Standard Time',
            ],
            [
                'tz_name' => 'Australia/Darwin',
                'gmt_offset' => 34200,
                'gmt_offset_name' => 'UTC+09:30',
                'abbreviation' => 'ACST',
                'official_name' => 'Australian Central Standard Time',
            ],
            [
                'tz_name' => 'Australia/Brisbane',
                'gmt_offset' => 36000,
                'gmt_offset_name' => 'UTC+10:00',
                'abbreviation' => 'AEST',
                'official_name' => 'Australian Eastern Standard Time',
            ],
            [
                'tz_name' => 'Australia/Adelaide',
                'gmt_offset' => 34200,
                'gmt_offset_name' => 'UTC+09:30',
                'abbreviation' => 'ACST',
                'official_name' => 'Australian Central Standard Time', //ACDT during the DST.
            ],
            [
                'tz_name' => 'Australia/Sydney',
                'gmt_offset' => 36000,
                'gmt_offset_name' => 'UTC+10:00',
                'abbreviation' => 'AEST',
                'official_name' => 'Australian Eastern Standard Time', //AEDT during the DST.
            ],
            [
                'tz_name' => 'Australia/Lord_Howe',
                'gmt_offset' => 37800,
                'gmt_offset_name' => 'UTC+10:30',
                'abbreviation' => 'LHST',
                'official_name' => 'Lord Howe Standard Time', //LHDT during the DST.
            ],
        ],
    ],
    'financial_institution_format' => [
        [
            'name' => 'Bank Name',
            'slug' => 'bank_name',
            'type' => 'string',
        ],
        [
            'name' => 'BSB',
            'slug' => 'bsb',
            'length' => 6,
            'type' => 'number',
        ],
        [
            'name' => 'Account Number',
            'slug' => 'account_number',
            'type' => 'number',
        ],
    ],
    'national_identification_document' => [
        [
            'name' => 'Australian citizenship certificate',
            'type' => 'string',
            'masking' => '',
            'regex' => '',
        ],
        [
            'name' => 'Australian birth certificate',
            'type' => 'string',
            'masking' => '',
            'regex' => '',
        ],
        [
            'name' => 'Passport',
            'type' => 'string',
            'masking' => '',
            'regex' => '/[A-Za-z][A-Za-z0-9]{7}[^A-Za-z0-9]/',
        ],
        [
            'name' => 'Driving licence',
            'type' => 'string',
            'masking' => '',
            'regex' => '',
        ],
    ],
];
