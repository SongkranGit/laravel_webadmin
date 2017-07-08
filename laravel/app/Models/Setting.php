<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'website_name',
        'website_short_name',
        'email',
        'address' ,
        'phone',
        'mobile',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'line_id',
        'vision',
    ];
}
