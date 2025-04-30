<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rehabilitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'prisoner_id',
        'program_name',
        'description',
        'is_completed',
    ];

    public function prisoner()
    {
        return $this->belongsTo(Prisoner::class);
    }
}
