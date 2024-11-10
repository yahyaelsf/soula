<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;

class TBrand extends LocalizableModel
{
    protected $table = "t_brands";
    protected $fillable = ['s_title', 's_description', 's_cover'];
    protected $localizable = ['s_title', 's_description'];

}
