<?php

namespace App\Infra\EntityConfig;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table="usuarios";
    public $timestamps = false;
}
