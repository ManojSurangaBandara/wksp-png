<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleScategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function parent(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(VehicleMcategory::class, 'id', 'parent_id1');
    }

}
