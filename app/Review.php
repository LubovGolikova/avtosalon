<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function getStarOnReviews($value){
        for( $i=1; $i<=$value; $i++){
            echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
        }
    }

    public function children(){
        return $this->hasOne('\App\Review', 'parent_id');
    }
    function   shortContent($len=300){
        $str = $this->review;
        if(strlen($str)>$len)
            return mb_substr($str, 0, $len).'...';
        return $str;
    }
}
