<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lipstick extends Model
{
    use HasFactory;
    protected $guarded  = [];

    public function lipstickCategory()
    {
        return $this->belongsTo(LipstickCategory::class, 'lipstick_category_id');
    }
}
