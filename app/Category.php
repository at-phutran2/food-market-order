<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    // use softDeletes;

    protected $fillable = [
        'name',
        'description'
    ];
    protected $dates = ['deleted_at'];
    
    /**
     * Category has many foods
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function foods()
    {
        return $this->hasMany('App\Food', 'category_id', 'id');
    }
}
