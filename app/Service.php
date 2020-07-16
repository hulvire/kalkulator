<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table="service";
    protected $fillable=["id","str_service_name","str_service_desc","int_service_category_id","int_service_type","int_service_param","int_service_price_type","int_service_sort_order","bool_enabled"];
}
