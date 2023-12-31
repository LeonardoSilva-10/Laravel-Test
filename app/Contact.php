<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Contact extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'contact', 'email'];
    protected $dates = ['deleted_at'];
}