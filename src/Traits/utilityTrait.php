<?php

namespace CountriesVivran\Traits;

trait utilityTrait
{
    public function untrailingslashit($string)
    {
        return rtrim($string, '/\\');
    }

    public function basePath()
    {
        return $this->untrailingslashit(dirname(__DIR__));
    }

    public function packageFilePath($relativePath)
    {
        return $this->basePath().'/'.trim($relativePath, '/');
    }

    public function cdnFlagPath($type, $countryCode)
    {
        return sprintf(CV_FLAG_IMG_SRC, strtolower($type), strtolower($countryCode), strtolower($type));
    }

    public function getAddressFormat($addressFormat)
    {
        return !empty($addressFormat) ? $addressFormat : CV_DEFAULT_ADDRESS_FORMAT;
    }

    public function getDefaultAddressFields($addressFields)
    {
        $fields = json_decode(CV_ADDRESS_FIELDS, true);

        return !empty($addressFields) ? \array_replace_recursive($fields, $addressFields) : $fields;
    }

    public function getFullDetailsByType($param, $type = 'language')
    {
        if (empty($param)) {
            return null;
        }

        switch ($type) {
            case 'currency':
                $fullArr = include $this->packageFilePath('i18n/currencies.php');
                break;
            case 'language':

                $fullArr = include $this->packageFilePath('i18n/languages.php');
                break;
        }

        $data = null;

        if (is_array($param)) {
            foreach ($param as $value) {
                if (!empty($fullArr[$value])) {
                    $data[] = $fullArr[$value];
                }
            }

            return $data;
        }

        return !empty($fullArr[$param]) ? $fullArr[$param] : null;
    }

    public function getContinentName($continentCode)
    {
        $continents = include $this->packageFilePath('i18n/continents.php');

        return (!empty($continents[$continentCode])) ? $continents[$continentCode]['name'] : null;
    }

    public function getCountryName($countryCode)
    {
        if (empty($countryCode)) {
            return null;
        }
        $data = null;

        if (is_array($countryCode)) {
            foreach ($countryCode as $value) {
                $countryData = include $this->packageFilePath('/i18n/countries/'.strtolower($value).'.php');
                $data[$value] = $countryData['name'];
            }

            return array_values($data);
        }

        $countryData = include $this->packageFilePath('/i18n/countries/'.strtolower($countryCode).'.php');

        return $countryData['name'];
    }
}
