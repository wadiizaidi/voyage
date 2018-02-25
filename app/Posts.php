<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['lieu_dep','lieu_arr','datevo','description','tempvo','user_id'];
}
