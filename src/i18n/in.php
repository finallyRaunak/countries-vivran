<?php

return [
    "isoCode" => "IN",
    "tld" => [ ".in" ], // country code top-level domain
    "cca2" => "IN", // code ISO 3166-1 alpha-
    "ccn3" => "356", // code ISO 3166-1 numeric
    "cca3" => "IND", // code ISO 3166-1 alpha-3
    "cioc" => "IND",
    "common" => _("India"), // common name in english
    "official" => _("Republic of India"), // official name in english
    "native" => _(""), //  native name
    "dialing_code" => _(""),
    "continent" => "AS",
    "subregion" => _("Southern Asia"),
    "capital" => [ _("New Delhi") ],
    "currencies" => [ "INR" ],
    "languages" => [ "eng", "hin", "tam" ],
    //    'languages' => [
    //        '' => [
    //            'name' => 'Arabic',
    //            'native' => 'العربية',
    //            'rtl' => true
    //        ],
    //    ],
    "emoji" => _(""),
    "emojiU" => _(""),
    "latitude" => "20.00000000",
    "longitude" => "77.00000000",
    "timezones" => [
        [
            "zone_name" => "Asia\/Kolkata",
            "gmt_offset" => 19800,
            "gmt_offset_name" => "UTC+05:30",
            "abbreviation" => "IST",
            "tz_name" => "Indian Standard Time",
        ],
    ],
    "landlocked" => false,
    "borders" => [ "PK, BD", "SL" ],
    "area" => _(3287590),
    "address_format" => '{name}\n{address_1}\n{address_2}\n{city} {postcode}\n{state}, {country}',
    "ethnicity" => _("Indian"),
    "states" => [
        [
            "iso_code" => "AP",
            "name" => _("Andhra Pradesh"),
        ],
    ],
    "financial_institution_format" => [
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
        ],
    ],
    "locale" => [
        "address" => [
            "postcode" => [
                "label" => "Pin code",
            ],
        ],
        "date_format" => "d/M/yyyy",
        "time_format" => "h:mm A",
        "dimensions_unit" => "cm",
        "weight_unit" => "kg",
    ],
    "national_identification_document" => [
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
        ],
    ],
];
