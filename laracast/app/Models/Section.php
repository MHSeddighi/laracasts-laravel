<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public $timestamps=false;

    public function episodes(){
        return $this->hasMany(Episode::class)->orderBy('number');
    }
}
