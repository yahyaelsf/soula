<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TSubscription extends BaseModel
{
    protected $table = "t_subscriptions";
    protected $primaryKey = 'pk_i_id';
    protected $appends = ['enabled_html'];

    protected $fillable = [
        'gateway',
        'fk_i_user_id',
        'fk_i_cource_id',
        'fk_i_vedio_id',
        'status',
        'amount',
        'b_enabled'
    ];
     public function cource()
    {
        return $this->belongsTo(TCource::class, 'fk_i_cource_id', 'pk_i_id');
    }
    public function vedio()
    {
        return $this->belongsTo(TVedio::class, 'fk_i_vedio_id', 'pk_i_id');
    }
    public function user()
    {
        return $this->belongsTo(TUser::class, 'fk_i_user_id', 'pk_i_id');
    }
}
