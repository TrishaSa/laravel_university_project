<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInfo extends Model
{
    use HasFactory;

    public $table = 'basic_info';

    // public function district()
    // {
    //     return $this->belongsTo(district::class);
    // }
}
