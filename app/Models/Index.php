<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Index
 *
 * @property $id
 * @property $url_image
 * @property $name
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Index extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['url_image', 'name', 'description'];


}
