<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Information
 *
 * @property $id_inf
 * @property $image_inf
 * @property $name_inf
 * @property $description_inf
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Information extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_inf', 'image_inf', 'name_inf', 'description_inf'];


}
