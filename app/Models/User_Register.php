<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Register extends Model
{
    use HasFactory;
    protected $table = 'user_reg';
    protected $primaryKey = 'user_id';
}
