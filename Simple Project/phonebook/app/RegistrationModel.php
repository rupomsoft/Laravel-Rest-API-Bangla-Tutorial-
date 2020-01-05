<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationModel extends Model
{

    protected $table = 'registration';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
