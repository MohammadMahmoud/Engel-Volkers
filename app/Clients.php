<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';
    protected $fillable = ['user_id', 'firstName', 'lastName', 'telephone', 'city', 'street', 'zip'];
}
