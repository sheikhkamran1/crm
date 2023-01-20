<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function customers()
    {
        return $this->belongsToMany(Customer::class)->withPivot('start_date','update_date','fee','year','renew_date','user_id');
    }
}
