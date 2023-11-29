<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spareparts extends Model
{
    use HasFactory;

    protected $table = 'spareparts';
    protected $guarded = [];

   // public function jobcard(): \Illuminate\Database\Eloquent\Relations\BelongsTo
//    {
//        return $this->belongsTo(JobCard::class, 'id', 'job_id');
//    }

}
