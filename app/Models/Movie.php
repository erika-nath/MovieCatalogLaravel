<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
use HasFactory;
/**
     * The attributes that are mass assignable.
     * This acts as a security layer for the database.
     */
    protected $fillable = [
        'title',
        'synopsis',
        'year',
        'cover',
    ];
}
