<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleTcategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function parent(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(VehicleMcategory::class, 'id', 'parent_id1');
    }

    public function parent1(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(VehicleScategory::class, 'id', 'parent_id2');
    }

}
