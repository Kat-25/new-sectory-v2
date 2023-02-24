<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @factory
 */
class householdtablemodel extends Model
{
    protected $primaryKey = 'householdID';
    public $table = 'householdtable';
    use HasFactory;

    public function getUserData($householdNo)
    {
        $user = User::select('householdID')->where('householdNo', $householdNo)->first();

        return $user ? $user->toArray() : null;
    }
}
