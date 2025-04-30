<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalCase extends Model
{
    use HasFactory;

    protected $fillable = [
        'prisoner_id',
        'case_number',
        'court_name',
        'next_hearing_date',
    ];

    public function prisoner()
    {
        return $this->belongsTo(Prisoner::class);
    }
}
