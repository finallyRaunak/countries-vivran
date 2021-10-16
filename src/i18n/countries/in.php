<?php

return [
    'iso_code' => 'IN', // ISO Code ISO 3166-1 Alpha-2 code
    'iso_code_3l' => 'IND', // ISO Code ISO 3166-1 Alpha-3 code
    'iso_code_num' => '356', // ISO Code ISO 3166-1 Numeric code
    'name' => 'India', // common name in english
    'official' => 'Republic of India', // official name in english
    'native' => 'Republic of India', // native name
    'continent' => 'AS',
    'subregion' => 'Southern Asia',
    'capital' => [
        'New Delhi'
    ],
    'currencies' => [
        'INR'
    ],
    'languages' => [
        'hi',
        'en'
    ],
    'dialing_code' => 91,
    'ethnicity' => 'Indian',
    'states' => [
        [
            'name' => 'Andhra Pradesh',
            'iso_code' => 'AP'
        ],
        [
            'name' => 'Arunachal Pradesh',
            'iso_code' => 'AR'
        ],
        [
            'name' => 'Assam',
            'iso_code' => 'AS'
        ],
        [
            'name' => 'Bihar',
            'iso_code' => 'BR'
        ],
        [
            'name' => 'Chhattisgarh',
            'iso_code' => 'CT'
        ],
        [
            'name' => 'Goa',
            'iso_code' => 'GA'
        ],
        [
            'name' => 'Gujarat',
            'iso_code' => 'GJ'
        ],
        [
            'name' => 'Haryana',
            'iso_code' => 'HR'
        ],
        [
            'name' => 'Himachal Pradesh',
            'iso_code' => 'HP'
        ],
        [
            'name' => 'Jammu and Kashmir',
            'iso_code' => 'JK'
        ],
        [
            'name' => 'Jharkhand',
            'iso_code' => 'JH'
        ],
        [
            'name' => 'Karnataka',
            'iso_code' => 'KA',
        ],
        [
            'name' => 'Kerala',
            'iso_code' => 'KL',
        ],
        [
            'name' => 'Madhya Pradesh',
            'iso_code' => 'MP',
        ],
        [
            'name' => 'Maharashtra',
            'iso_code' => 'MH',
        ],
        [
            'name' => 'Manipur',
            'iso_code' => 'MN',
        ],
        [
            'name' => 'Meghalaya',
            'iso_code' => 'ML',
        ],
        [
            'name' => 'Mizoram',
            'iso_code' => 'MZ',
        ],
        [
            'name' => 'Nagaland',
            'iso_code' => 'NL',
        ],
        [
            'name' => 'Orissa',
            'iso_code' => 'OR',
        ],
        [
            'name' => 'Punjab',
            'iso_code' => 'PB',
        ],
        [
            'name' => 'Rajasthan',
            'iso_code' => 'RJ',
        ],
        [
            'name' => 'Sikkim',
            'iso_code' => 'SK',
        ],
        [
            'name' => 'Tamil Nadu',
            'iso_code' => 'TN',
        ],
        [
            'name' => 'Telangana',
            'iso_code' => 'TS',
        ],
        [
            'name' => 'Tripura',
            'iso_code' => 'TR',
        ],
        [
            'name' => 'Uttarakhand',
            'iso_code' => 'UK',
        ],
        [
            'name' => 'Uttar Pradesh',
            'iso_code' => 'UP',
        ],
        [
            'name' => 'West Bengal',
            'iso_code' => 'WB',
        ],
        [
            'name' => 'Andaman and Nicobar Islands',
            'iso_code' => 'AN',
        ],
        [
            'name' => 'Chandigarh',
            'iso_code' => 'CH',
        ],
        [
            'name' => 'Dadra and Nagar Haveli',
            'iso_code' => 'DN',
        ],
        [
            'name' => 'Daman and Diu',
            'iso_code' => 'DD',
        ],
        [
            'name' => 'Delhi',
            'iso_code' => 'DL',
        ],
        [
            'name' => 'Lakshadeep',
            'iso_code' => 'LD'
        ],
        [
            'name' => 'Pondicherry (Puducherry)',
            'iso_code' => 'PY'
        ],
    ],
    'additional_information' => [
        'tld' => [ // Internet TLD
            '.in'
        ],
        'is_independent' => true,
        'is_un_member' => true,
        'area' => 3287590,
        'latitude' => '20.00000000',
        'longitude' => '77.00000000',
        'is_landlocked' => false,
        'borders' => [
            'BD',
            'BT',
            'MM',
            'CN',
            'NP',
            'PK'
        ],
    ],
    'locale' => [
        'address' => [
            'postcode' => [
                'label' => 'PIN',
            ],
            'state' => [
                'label' => 'State',
            ]
        ],
        'address_format' => '{name}\n{address_1}\n{address_2}\n{city} {postcode}\n{state}, {country}',
        'date_format_string' => 'dd/mm/yyyy',
        'date_format' => 'd/m/Y',
        'time_format_string' => '24H',
        'time_format' => 'H:i A',
        'dimension_unit' => 'cm',
        'weight_unit' => 'kg',
        'default_locale' => 'hi_IN',
        'timezones' => [
            [
                'tz_name' => 'Asia/Kolkata',
                'gmt_offset' => 19800,
                'gmt_offset_name' => 'UTC+05:30',
                'abbreviation' => 'IST',
                'official_name' => 'Indian Standard Time'
            ]
        ]
    ],
    'financial_institution_format' => [
        [
            "name" => "Bank Name",
            "slug" => "bank_name",
            "type" => "string",
        ],
        [
            "name" => "IFSC",
            "slug" => "bank_identification_code",
            "length" => 11,
            "type" => "string",
        ],
        [
            "name" => "Account Number",
            "slug" => "account_number",
            "type" => "number",
        ]
    ],
    'national_identification_document' => [
        [
            "name" => "Aadhar",
            "type" => "number",
            "length" => 12,
            "masking" => "XXXX XXXX XXXX",
            "regex" => '/^[2-9]{1}[0-9]{3}\\s{1}[0-9]{4}\\s{1}[0-9]{4}$/',
        ],
        [
            "name" => "PAN",
            "type" => "string",
            "length" => 10,
            "masking" => "XXXXXXXXXX",
            "regex" => '/[A-Z]{5}[0-9]{4}[A-Z]{1}$/',
        ],
        [
            "name" => "Passport",
            "type" => "number",
            "length" => 10,
            "masking" => "",
            "regex" => '/^[A-PR-WYa-pr-wy][1-9]\\d\\s?\\d{4}[1-9]$/',
        ],
        [
            "name" => "Voter ID",
            "type" => "string",
            "length" => 10,
            "masking" => "XXXXXXXXXX",
            "regex" => '/^([a-zA-Z]){3}([0-9]){7}?$/',
        ],
        [
            "name" => "Driving Licence",
            "type" => "string",
            "length" => 13,
            "masking" => "XX-XX-XXXX-XXXXX",
            "regex" => '/^([A-Z]{2}[0-9]{2})( )|([A-Z]{2}-[0-9]{2}))((19|20)[0-9][0-9])[0-9]{7}$/',
        ]
    ]
];
