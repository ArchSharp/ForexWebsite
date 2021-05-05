<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    use HasFactory;

    public $table = 'password_resets';
    public $timestamps = false;
    protected $fillable = ['created_at'];
    protected $primaryKey = 'email';
}
