<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    protected $fillable = [
        'email_verification_code',
        'admin_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}