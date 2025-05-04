<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    use HasFactory;
    public $table = 'district';
    
    // public function students()
    // {
    //     return $this->hasMany(BasicInfo::class);
    // }
}
