<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'location', 'contact_details', 'max_capacity',
        'location_coordinates', 'is_collection_center', 'area_id'];
}
