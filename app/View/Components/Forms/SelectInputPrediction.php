<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectInputPrediction extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $name=null,
        public array $options,
    )
    {
       
        
    }

    /**
     * Determine if the given option is the currently selected option.
     */
    public function isSelected(string $option): bool
    {
        return $option === $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.select-input-prediction');
    }
}
