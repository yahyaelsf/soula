<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCource extends LocalizableModel
{
    protected $table = "t_cources";
    protected $fillable = ['s_title', 's_description', 's_cover'];
    protected $localizable = ['s_title', 's_description'];

    public function scopeIsActive($query)
    {
        return $query->where('b_enabled', '1');
    }
    public function vedios()
    {
        return $this->hasMany(TVedio::class, 'fk_i_cource_id', 'pk_i_id');
    }
    public function musics()
    {
        return $this->hasMany(TMusic::class, 'fk_i_cource_id', 'pk_i_id');
    }
}
