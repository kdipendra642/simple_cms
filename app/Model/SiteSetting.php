<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_name',
        'meta_title',
        'social_profile_fb',
        'social_profile_twitter',
        'social_profile_insta',
        'social_profile_youtube',
        'social_profile_linkedin',
        'contact_phone',
        'contact_email',
        'contact_address',
        'logo',
        'favicon',
    ];
}
