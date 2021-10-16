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
}
