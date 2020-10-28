<?php
namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class ConvertTime extends Middleware
{
    
    public static function convertTime($time){
        $timesplit = explode(":", $time);
        return ((int)$timesplit[0]*60) + (int)$timesplit[1];
    }

    public static function convertTimeFormat($time){
        $hours = sprintf("%02d",intdiv($time, 60));
        $minutes = sprintf("%02d",fmod($time, 60));
        return $hours . ":" . $minutes;
    }
}