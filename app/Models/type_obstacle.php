<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_obstacle extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'is_traversable',
        'ia_effect_if_traverse',
        'apparence',
        'nbr_min_per_level',
        'nbr_max_per_level',
    ];
}
