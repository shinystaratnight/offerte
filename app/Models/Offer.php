<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function scopeOfDeparture($query, $departure)
    {
        return $query->where('departure', $departure);
    }

    public function getMonthAttribute()
    {
        $month = $this->from;
        return $month;
    }

    public function getFromAttribute($value)
    {
        return $value;
    }
}
