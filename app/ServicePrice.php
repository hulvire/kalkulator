<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePrice extends Model
{
    protected $fillable=["id","int_service_id","int_service_price_type","int_format_id","int_min_amount","int_max_amount","int_price_per_item","int_price_per_set"];
}
