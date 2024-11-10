<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['gateway', 'fk_i_user_id', 'reference_id','status','amount','data'];
    protected $casts = [
        'data' => 'json'
    ];
}
