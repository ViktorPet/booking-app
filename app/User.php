<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use Booking\Presenters\UserPresenter;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'lastname',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function city()
    {
        return $this->belongsTo('App\City');
    }


    public function photos()
    {
        return $this->morphMany('App\Photo', 'photoable');
    }

    /* Lecture 16 */
    public function users()
    {
        return $this->morphToMany('App\User', 'likeable');
    }

    /* Lecture 16 */
    public function address()
    {
        return $this->hasOne('App\Address','hotel_id');
    }

    /* Lecture 16 */
    public function rooms()
    {
        return $this->hasMany('App\Room','hotel_id');
    }

    /* Lecture 16 */
    public function reviews()
    {
        return $this->morphMany('App\Review', 'reviewable');
    }
}
