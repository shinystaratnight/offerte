<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = ['departure', 'category', 'destination', 'from', 'to', 'price', 'link', 'hot'];

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
        return Carbon::parse($value)->format('d M');
    }

    public function getToAttribute($value)
    {
        return Carbon::parse($value)->format('d M');
    }

    public function setFromAttribute($value)
    {
        $format = 'd/m/Y';
        $date = Carbon::createFromFormat($format, $value);
        $this->attributes['from'] =  $date;
    }

    public function setToAttribute($value)
    {
        $format = 'd/m/Y';
        $date = Carbon::createFromFormat($format, $value);
        $this->attributes['to'] =  $date;
    }
}
