<?php

namespace CountriesVivran;

use CountriesVivran\Exception\InvalidCountryCodeException;

class Countries
{
    use Traits\utilityTrait;

    public function getCountryByCode($isoCode)
    {
        if (! $this->isValidCode($isoCode)) {
            throw new InvalidCountryCodeException('Invalid Country code provided.');
        }
        $countryData = include $this->packageFilePath('/i18n/countries/'.strtolower($isoCode).'.php');

        return $countryData;
    }

    public function isValidCode($code)
    {
        $code = \strtoupper($code);
        $isoAlpha2 = include $this->packageFilePath('i18n/iso2to3.php');

        if (! empty($isoAlpha2[$code])) {
            return true;
        }

        $isoAlpha3 = include $this->packageFilePath('i18n/iso3to2.php');
        if (! empty($isoAlpha3[$code])) {
            return true;
        }

        return false;
    }
}
