<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class School extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'school_name',
        'school_regNo',
       'school_address',
        'school_district',
        'school_phone',
        'rep_fname',
        'rep_lname',
        'rep_email',
        'rep_phone',
        'rep_password', // Hash the password
        'admin_id',
        'rep_username',
        'rep_dob',
        'image',


    ];



}
