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
    protected $table = 'schools';
    protected $primaryKey = 'school_regNo';
public $incrementing = false;
protected $keyType = 'string';
public $timestamps=false; 
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'school_name',
        'school_regNo',
        'school_district',
        'rep_fname',
        'rep_lname',
        'rep_email',
        
        
        


    ];



}
