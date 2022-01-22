<?php

namespace CountriesVivran;

use CountriesVivran\Countries;
use CountriesVivran\Exception\InvalidContinentCodeException;
use CountriesVivran\Traits\utilityTrait;

class Continents
{
    use utilityTrait;

    public function list()
    {
        $list = [];
        $continents = include $this->packageFilePath('/i18n/continents.php');
        foreach ($continents as $code => $continent) {
            $list[] = [
                'iso_code'=>$code,
                'name'=>$continent['name'],
            ];
        }

        return $list;
    }

    public function listCountry($isoCode)
    {
        $list = [];
        $code = $this->isValidCode($isoCode);
        if (!$code) {
            throw new InvalidContinentCodeException($isoCode.' is an invalid Continent code.');
        }
        $continents = include $this->packageFilePath('/i18n/continents.php');
        $countriesInst = new Countries();

        foreach ($continents[$code]['countries'] as $country) {
            $list[] = [
                'iso_code'=>$country,
                'name'=>$countriesInst->getCountryAttributeByCode($country, 'name'),
            ];
        }

        return $list;
    }

    public function isValidCode($code)
    {
        $code = \strtoupper($code);
        $continents = include $this->packageFilePath('/i18n/continents.php');

        if (!empty($continents[$code])) {
            return $code;
        }

        return false;
    }
}
