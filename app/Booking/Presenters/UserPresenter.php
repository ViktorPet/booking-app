<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 5/13/2019
 * Time: 8:38 AM
 */

namespace App\Booking\Presenters;


trait UserPresenter
{

    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->surname;
    }




}