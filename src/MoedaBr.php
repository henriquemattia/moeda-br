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
}
