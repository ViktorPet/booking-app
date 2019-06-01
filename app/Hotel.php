<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{




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
    public function comments()
    {
        return $this->morphMany('App\Review', 'reviewable');
    }

    /* Lecture 16 */
    public function articles()
    {
        return $this->hasMany('App\Article','hotel_id');
    }




}
