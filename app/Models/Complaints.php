<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    //change $table sa name sa table ninyo for complaints
    public $table = 'complaints_table';
    

}
