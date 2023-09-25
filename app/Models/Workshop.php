<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function type()
    {
        return $this->hasOne(WorkshopType::class, 'id', 'type_id');
    }

    public function battalion()
    {
        return $this->hasOne(SlemeBattalion::class, 'id', 'battalion_id');
    }

}
