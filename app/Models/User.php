<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait, HasFactory;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $primaryKey='user_id';

    protected $guarded = [];
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        // 'profile_photo_url',
    ];

    public function template(){
        return $this->belongsTo('App\Models\Template','template_id');
    }

    public function specializations(){
        return $this->belongsToMany('App\Models\UserSpecialization', 'user_specialization','user_id','spec_code');
    } 
    public function specs(){
        return $this->hasMany('App\Models\UserSpecialization','user_id','id');
    }
    public function specs(){
        return $this->hasMany('App\Models\UserSpecialization','user_id','id');
    }
 
    public function country(){
        return $this->belongsTo('App\Models\Country','country_code')->select('country_code','country_name');
    }
    public function state(){
        return $this->belongsTo('App\Models\State','state_code')->select('state_code','state_name');
    }
    
    public function city(){
        return $this->belongsTo('App\Models\City','city_code')->select('city_code','city_name');
    }
    
    
}
