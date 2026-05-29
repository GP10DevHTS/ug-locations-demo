<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Gp10devhts\UgVillageLocations\Models\District as BaseDistrict;
class District extends BaseDistrict
{
    protected static function boot(){
        parent::boot();

        static::creating(function($district){
            $district->region_id ??= Region::first()?->id ?? null;
        });
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }
}
