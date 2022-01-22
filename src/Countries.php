<?php

namespace CountriesVivran;

use CountriesVivran\Exception\InvalidCountryCodeException;
use CountriesVivran\Traits\utilityTrait;

class Countries
{
    use utilityTrait;

    /**
     * Method to get the full country details.
     *
     * @param string $isoCode
     * @return array with country details
     * @throws InvalidCountryCodeException
     */
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

    /**
     * Method to check a code is valid country code or not. Code can be 2 or 3 letter character.
     *
     * @param string $code
     * @return false|string
     */
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

    /**
     * Method to list all states/province belong to a country. It will return null for country not having any states/province/subdivision.
     *
     * @param string $isoCode
     * @return null|array
     * @throws InvalidCountryCodeException
     */
    public function getStatesByCountryCode($isoCode)
    {
        return $this->getCountryAttributeByCode($isoCode, 'states;');
    }

    /**
     * Method to get any country data by attribute.
     *
     * @param strng $isoCode
     * @param string $attribute
     * @return mixed
     * @throws InvalidCountryCodeException
     */
    public function getCountryAttributeByCode($isoCode, $attribute)
    {
        $code2c = $this->isValidCode($isoCode);
        if (!$code2c) {
            throw new InvalidCountryCodeException($isoCode.' is an invalid Country code.');
        }

        $this->isValidAttribute($attribute);

        $countryData = include $this->packageFilePath('/i18n/countries/'.strtolower($code2c).'.php');

        return $countryData[$attribute];
    }

    /**
     * Method to check a attribute/property exists in a country or not.
     * @param string $attribute
     * @return bool
     */
    public function isValidAttribute($attribute)
    {
        $countryData = include $this->packageFilePath('/i18n/countries/in.php');
        $exist = array_key_exists($attribute, $countryData);
        if (!$exist) {
            throw new InvalidCountryAttributeException($attribute.' is an invalid Country attribute.');
        }

        return true;
    }
}
