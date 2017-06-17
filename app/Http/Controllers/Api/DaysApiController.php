<?php

namespace App\Http\Controllers\Api;

class DaysApiController extends ApiController
{
    public function index() {
        //Convert to date
        $datestr="2017-08-27 00:00:00";//Your date
        $date=strtotime($datestr);//Converted to a PHP date (a second count)

        //Calculate difference
        $diff=$date-time();//time returns current time in seconds
        $days=floor($diff/(86400));//seconds/minute*minutes/hour*hours/day)
        $hours=floor(($diff % 86400) / 3600);
        $minutes=floor(($diff % 3600 ) / 60 );
        $seconds=($diff % 60);


        //Report
        return "$days days $hours hours $minutes minutes $seconds seconds";

    }
}
