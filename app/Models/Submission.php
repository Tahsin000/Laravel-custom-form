<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'name',
        'occupation',
        'institute',
        'contact_no',
        'whatsapp_number',
        'facebook_profile',
        'reason',
        'facebook_business_profile',
        'profile_image', // Ensure this is added to handle image uploads
    ];
}
