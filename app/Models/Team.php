<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
  protected  $fillable=[
        'name',
        'position',
        'order',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'short_description',
        'image',
    ];
}