<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use   Booking\Presenters\ReviewPresenter;


    /* Lecture 16 */
    public function reviewable()
    {
        return $this->morphTo();
    }

    /* Lecture 16 */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
