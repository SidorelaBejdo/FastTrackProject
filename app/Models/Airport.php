<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Airport extends Model
{
    use HasFactory;

    protected $table = 'airports';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function country()
    {
        return $this->hasOne('Country');
    }

    public function city()
    {
        return $this->belongsTo('City');
    }

}
