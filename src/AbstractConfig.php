<?php

namespace MNIB\CsFixer;

use PhpCsFixer\Config as BaseConfig;
use PhpCsFixer\ConfigInterface;

abstract class AbstractConfig extends BaseConfig
{
    public function addRules(array $rules): ConfigInterface
    {
        $rules = array_replace($this->getRules(), $rules);

        $this->setRules($rules);

        return $this;
    }
}
