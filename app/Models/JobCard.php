<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCard extends Model
{
    use HasFactory;
    protected $guarded = [];

//    public function parent(): \Illuminate\Database\Eloquent\Relations\HasOne
//    {
//        return $this->hasOne(VehicleMcategory::class, 'id', 'parent_id1');
//    }

//    public function parent1(): \Illuminate\Database\Eloquent\Relations\HasOne
//    {
//        return $this->hasOne(VehicleScategory::class, 'id', 'parent_id2');
//    }

//    public function parent2(): \Illuminate\Database\Eloquent\Relations\HasOne
//    {
//        return $this->hasOne(VehicleTcategory::class, 'id', 'parent_id3');
//    }

//    public function parent3(): \Illuminate\Database\Eloquent\Relations\HasOne
//    {
//        return $this->hasOne(SupplierDetail::class, 'id', 'parent_id4');
//    }

    public function Spare_parts(): \Illuminate\Database\Eloquent\Relations\hasOne
    {
        return $this->hasOne(Spareparts::class, 'job_id', 'id');
    }
}
