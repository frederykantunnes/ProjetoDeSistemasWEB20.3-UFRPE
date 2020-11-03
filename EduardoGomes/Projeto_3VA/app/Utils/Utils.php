<?php
namespace App\Utils;

class Utils
{
    public static $subjects = ['Artes','Biologia','Ciências','Educação física','Física','Geografia','História','Matemática','Português','Química'];
    public static $weekdays = ['Domingo','Segunda-feira','Terça-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sábado'];

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