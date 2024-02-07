<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "location",
        "items",
        "activated",
    ];

    protected $casts = [
        "items" => "array",
        "activated" => 'boolean',
    ];
}
