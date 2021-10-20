<?php

namespace CountriesVivran;

use CountriesVivran\Exception\InvalidCountryCodeException;
use CountriesVivran\Traits\utilityTrait;

class Countries
{
    use utilityTrait;

    public function getCountryByCode($isoCode)
    {
        $code2c = $this->isValidCode($isoCode);
        if (!$code2c) {
            throw new InvalidCountryCodeException($isoCode.' is an invalid Country code.');
        }
        $countryData = include $this->packageFilePath('/i18n/countries/'.strtolower($code2c).'.php');

        $countryData['continent'] = $this->getContinentName($countryData['continent']);
        $countryData['locale']['address'] = $this->getDefaultAddressFields($countryData['locale']['address']);
        $countryData['locale']['address_format'] = $this->getAddressFormat($countryData['locale']['address_format']);
        $countryData['additional_information']['borders'] = $this->getCountryName($countryData['additional_information']['borders']);
        $countryData['languages'] = $this->getFullDetailsByType($countryData['languages'], 'language');
        $countryData['currencies'] = $this->getFullDetailsByType($countryData['currencies'], 'currency');
        $countryData['flag']['png'] = $this->cdnFlagPath('png', $code2c);
        $countryData['flag']['svg'] = $this->cdnFlagPath('svg', $code2c);

        return $countryData;
    }

    public function isValidCode($code)
    {
        $code = \strtoupper($code);
        $isoAlpha2 = include $this->packageFilePath('i18n/iso2to3.php');

        if (!empty($isoAlpha2[$code])) {
            return $code;
        }

        $isoAlpha3 = include $this->packageFilePath('i18n/iso3to2.php');
        if (!empty($isoAlpha3[$code])) {
            return $isoAlpha3[$code];
        }

        return false;
    }
}
