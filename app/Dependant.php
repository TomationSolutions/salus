<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependant extends Model
{
    protected $fillable = ['name', 'gender', 'dob', 'phone', 'email', 'hospital', 'packages', 'image'];
}
