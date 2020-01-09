<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependant extends Model
{
    protected $fillable = ['user_id', 'name', 'gender', 'dob', 'phone', 'email', 'hospital', 'packages', 'image'];
}
