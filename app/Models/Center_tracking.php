<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center_tracking extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'center_trackings';
    protected $primaryKey = 'id';
}
