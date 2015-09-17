<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeighIn extends Model
{
    protected $table = 'weigh_ins';

    protected $fillable = ['user_id', 'weight', 'units'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
