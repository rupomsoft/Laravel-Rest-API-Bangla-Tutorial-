<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailsModel extends Model
{
    protected $table = 'details';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
