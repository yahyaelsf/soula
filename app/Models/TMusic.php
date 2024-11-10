<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TMusic extends LocalizableModel
{
    protected $table = "t_musics";
    protected $fillable = ['s_title','fk_i_vedio_id','fk_i_cource_id' ,'s_music' , 's_cover'];
    protected $localizable = ['s_title'];

    public function scopeIsActive($query)
    {
        return $query->where('b_enabled', '1');
    }
    public function cource()
    {
        return $this->belongsTo(TCource::class, 'fk_i_cource_id', 'pk_i_id');
    }
    public function vedio()
    {
        return $this->belongsTo(TVedio::class, 'fk_i_vedio_id', 'pk_i_id');
    }
}
