<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viewresidentsmodel extends Model
{
    public $table = 'residents';
    use HasFactory;
    public $timestamps=false;
}
