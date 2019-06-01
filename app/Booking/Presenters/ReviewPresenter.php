<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 6/1/2019
 * Time: 12:13 PM
 */

namespace App\Booking\Presenters;


/* Lecture 16 */
trait ReviewPresenter {

    /* Lecture 16 */
    public function getRatingAttribute($value)
    {
        $str = '';

        for($i=1;$i<=5;$i++)
        {
            $negr = '';

            if($value == 1 && $i >  1)
                $negr = 'negative-rating';

            elseif($value == 2 && $i > 2)
                $negr = 'negative-rating';

            elseif($value == 3 && $i > 3)
                $negr = 'negative-rating';

            elseif($value == 4 && $i > 4)
                $negr = 'negative-rating';

            $str .= '<span class="glyphicon glyphicon-star '.$negr.'" aria-hidden="true"></span>';

        }

        return $str;

    }
}