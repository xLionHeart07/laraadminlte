<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CountrySelect extends Component
{
    public $countries;

    public function __construct()
    {
        $this->countries = [
            'Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Angola',
            'Antigua and Barbuda', 'Argentina', 'Armenia', 'Australia',
            'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh',
            // ... add all countries here
            'Zambia', 'Zimbabwe'
        ];
    }

    public function render()
    {
        return view('components.country-select');
    }
}
