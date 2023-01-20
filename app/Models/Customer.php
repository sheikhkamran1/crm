<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function services()
    {
        return $this->belongsToMany(Service::class)->withPivot('start_date','update_date','fee','year','renew_date','user_id');
    }

}
