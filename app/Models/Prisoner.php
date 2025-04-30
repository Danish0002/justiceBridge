<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'age',
        'case_details',
        'prison_name',
        'arrest_date',
        'is_bailed',
    ];

    // Make sure the Case model is renamed to LegalCase and imported
    public function legalCases()
    {
        return $this->hasMany(LegalCase::class);
    }

    // Ensure the Rehabilitation model is correctly imported
    public function rehabilitations()
    {
        return $this->hasMany(Rehabilitation::class);
    }

    // Ensure the UtrccLink model is correctly imported
    public function utrccLinks()
    {
        return $this->hasMany(UtrccLink::class);
    }
}
