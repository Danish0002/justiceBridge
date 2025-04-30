<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtrccLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'prisoner_id',
        'lawyer_id',
        'assigned_date',
    ];

    public function prisoner()
    {
        return $this->belongsTo(Prisoner::class);
    }

    public function lawyer()
    {
        return $this->belongsTo(Lawyer::class);
    }
}
