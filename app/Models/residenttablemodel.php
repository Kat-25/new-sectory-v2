<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class residenttablemodel extends Model
{
    use HasFactory;
    protected $primaryKey = 'residentID';
    public $table = 'residents';
    protected $fillable = ['residentStatus', 'accountStatus'];
}
