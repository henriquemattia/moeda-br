<?php

namespace Henriquemattia\MoedaBr;

use Laravel\Nova\Fields\Field;

class MoedaBr extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'moeda-br';

    public function required($callback = true)
    {
        return $this->rules(['required']);
    }

    public function displayValueDividedBy($value = null)
    {
        return $this->withMeta([
            'divideValue' => intval($value)
        ]);
    }

    public function multiplyValueBy($value = null)
    {
        return $this->withMeta([
            'multiplyValue' => intval($value)
        ]);
    }

}
