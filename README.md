# Countries Vivran

Welcome to the Countries Vivran repository on GitHub. Countries Vivran is a composer package or library to get all sorts of useful information about every country in ISO 3166 packaged as convenient little country objects. 

It contains info for the following standards; **Countries**: ISO 3166-1 alpha-2 code (_with alpha-2 to alpha-3 set_), **States/Subdivisions**: ISO 3166-2, **Currency**: ISO 4217 and **Phone Dialing Code** : E.164. 

I will add any country based data I can get access to. I hope this to be a repository for all country based information. Here you can browse the source, look at open issues and keep track of development.

> **Important:**
>
> This package is still under active development so please do not use it in production environment.

#### Features include:

TODO: What are the features?

#### Why this package ?

TODO: Why would you use this package?

## Data

```yaml
iso_code: IN # ISO Code ISO 3166-1 Alpha-2 code
iso_code_3l: IND # ISO Code ISO 3166-1 Alpha-3 code
iso_code_num: 356 # ISO Code ISO 3166-1 Numeric code
name: India # Common name in english
official: Republic of India # Official name in english
native: Republic of India # Native Name
continent: Asia # Continent
subregion: Southern Asia # Sub region of continent

capital: # List of all the capital name of the country
- New Delhi

currencies: # List of all the currencies used in the country
- label: Indian rupee # Name of the currency
  symbol: "₹" # Symbol of the currency
  currency_pos: left # Currency symbol position
  thousand_sep: ","
  decimal_sep: "."
languages: # List of all the languages used in the country
- name: Hindi # Official name in english
  native: हिन्दी # Native name in english
  rtl: false # If Right to Left or not
...
...
dialing_code: 91 # International dialing code or international Direct Dialing
ethnicity: Indian # The fact or state of belonging to a social group that has a common national or cultural tradition.
states: # List of all the state/sub devision/province of a country
- name: Andhra Pradesh # Official Name
  iso_code: AP # ISO 3166-2 State/Sub division code
...
...
additional_information:
  tld: # Country code top-level domain
  - ".in"
  is_independent: true # Independence status (denotes the country is considered a sovereign state)
  is_un_member: true
  area: 3287590 # Land area in km²
  latitude: '20.00000000'
  longitude: '77.00000000'
  is_landlocked: false

  borders: # List of neighbouring countries
  - Bangladesh
  - Bhutan
  - Myanmar
  - China
  - Nepal
  - Pakistan
locale:
  address: # Address form fields
    first_name:
      label: First name
      required: true
    last_name:
      label: Last name
      required: true
    country:
      label: Country / Region
      required: true
    address_1:
      label: Street address
      placeholder: House number and street name
      required: true
    address_2:
      label: Apartment, suite, unit, etc.
      required: false
    city:
      label: Town / City
      required: true
    state:
      label: State
      required: true
    postcode:
      label: PIN
      required: true
  
  # Address format that needs to be printed in letter or email
  address_format: "{name}\n{address_1}\n{address_2}\n{city} {postcode}\n{state}, {country}"

  date_format_string: dd/mm/yyyy # Date format
  date_format: d/m/Y # Date format in PHP
  time_format_string: 12H # Time format
  time_format: h:i A # Time format in PHP
  dimension_unit: cm
  weight_unit: kg
  default_locale: hi_IN

  # List of all the timezone used in the country
  timezones: 
  - tz_name: Asia/Kolkata
    gmt_offset: 19800
    gmt_offset_name: UTC+05:30
    abbreviation: IST
    official_name: Indian Standard Time

# Financial/Bank institution format this details is required to send a money to a person
financial_institution_format:
- name: Bank Name
  slug: bank_name
  type: string
- name: IFSC
  slug: bank_identification_code
  length: 11
  type: string
- name: Account Number
  slug: account_number
  type: number

# List of all national identity card recognized by government
national_identification_document:
- name: Aadhar # Common Name
  type: number # Validation type
  length: 12 # Length of the ID
  masking: XXXX XXXX XXXX
  regex: "/^[2-9]{1}[0-9]{3}\\s{1}[0-9]{4}\\s{1}[0-9]{4}$/" # Regex to be used for validation.
- name: Passport
  type: number
  length: 10
  masking: ''
  regex: "/^[A-PR-WYa-pr-wy][1-9]\\d\\s?\\d{4}[1-9]$/"
...
...
flag:
  # CDN path of Flag in png format
  png: https://raw.githubusercontent.com/finallyRaunak/countries-vivran/main/flag/png/in.png
  # CDN path of Flag in svg format
  svg: https://raw.githubusercontent.com/finallyRaunak/countries-vivran/main/flag/svg/in.svg

```

## Installation (for development)

- Download the the zip
- Extract the zip
- From cli cd to the extracted dir
- run `composer install`

## Usage

TODO: How to use it?

## Further documentation

The bulk of the documentation is located in `doc/README.md`:

[Read the Documentation](doc/README.md)

[Read the Release Notes](https://github.com/finallyRaunak/countries-vivran/releases)


## Contributing

Countries Vivran is in an early or development stage, so there are lots of things that you can do. Please read [CONTRIBUTING](doc/CONTRIBUTING.md)

### Your First Contribution

- review a [Pull Request](https://github.com/finallyRaunak/countries-vivran/pulls)
- fix an [Issue](https://github.com/finallyRaunak/countries-vivran/issues)
- update the [documentation](doc/)
- update the [README](README.md)
<!-- - make a website -->
<!-- - write a tutorial -->

## About

Countries Vivran package is a [Raunak Gupta](https://github.com/finallyRaunak) initiative.
See also the list of [contributors](https://github.com/finallyRaunak/countries-vivran/contributors).

## Credits / Source

- WooCommerce
- Wikipedia


## License

countries-vivran is licensed under the MIT License - see the [LICENSE](LICENSE)
file for details.