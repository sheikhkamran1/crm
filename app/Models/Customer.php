<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory, Notifiable;



    public function services()
    {
        return $this->belongsToMany(Service::class)->withPivot('start_date', 'update_date', 'fee', 'year', 'renew_date', 'user_id');
    }
    public static function totalCustomerNumber()
    {
        return self::query()->count('id');
    }
}
