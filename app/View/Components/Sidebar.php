<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $currentStep = Auth::user()->application_step;
        $selectedStep = request()->input('q', $currentStep);
        $activeStep = $selectedStep > $currentStep ? $currentStep : $selectedStep;

        return view('components.sidebar', ['activeStep' => $activeStep, 'currentStep' => $currentStep]);
    }
}
