<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Builder;

class Watch extends Pivot
{
    use HasFactory;
    protected $table="watches";

    protected $primary_key=['episode_id','user_id'];
    public $timestamps=false;
    public $incrementing = false;
}