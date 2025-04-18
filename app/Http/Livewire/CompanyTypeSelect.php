<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CompanyTypeSelect extends Component
{
    public $companyType;
    public $companyTypes = [];
    
    public function mount()
    {
        // Fetch current company_type from settings
        $this->companyType = DB::table('settings')->where('key', 'company_type')->value('value') ?? 'IT';

        // Load the company types from JSON
        $this->loadCompanyTypes();
    }

    public function loadCompanyTypes()
    {
        $jsonPath = public_path('company_types.json');
        info($jsonPath);
        if (file_exists($jsonPath)) {
            $this->companyTypes = json_decode(file_get_contents($jsonPath), true);
        }
    }
    public function render()
    {
        return view('livewire.company-type-select');
    }
}
