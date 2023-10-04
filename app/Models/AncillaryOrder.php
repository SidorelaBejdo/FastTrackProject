<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AncillaryOrder extends Model
{
    use HasFactory;

    protected $table = 'ancillary_orders';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function airport()
    {
        return $this->belongsTo('User');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function brandEmail()
    {
        return $this->belongsTo('BrandEmail');
    }
}
