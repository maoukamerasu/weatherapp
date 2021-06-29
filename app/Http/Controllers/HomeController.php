<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $hello="hello";
        $city="Fukuoka-shi,jp";
        $appid="f7fb2f6da8a5cf60c82bfb1c84f63bdb";
        $url="http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&APPID=".$appid;
        $json = file_get_contents($url);
        $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $json_decode = json_decode($json);
        $today=date("Y/m/d");
        $week_word=array(
            '月','火','水','木','金','土','日'
        );
        $week=$week_word[1];
        $weather=array(
            'Clouds'=>'雲',
            'Snow'=>'雪',
            'Rain'=>'雨',
            'Clear'=>'晴れ',
            'Drizzle'=>'霧雨',
            'Thunderstorm'=>'雷雨',
            'Mist'=>'霧',
            'Smoke'=>'煙霧',
        );
        $iconurl="<img src='https://openweathermap.org/img/wn/".$json_decode->weather[0]->icon."@2x.png'>";
        return view('welcome',['today'=>$today,
                                'week'=>$week,
                                'hello'=>$weather[$json_decode->weather[0]->main],
                                'temp'=>$json_decode->main->temp,
                                'feels_like'=>$json_decode->main->feels_like,
                                'min'=>$json_decode->main->temp_min,
                                'max'=>$json_decode->main->temp_max,
                                'icon'=>$iconurl,
                                'sea_level'=>$json_decode->main->pressure,
                                'humidity'=>$json_decode->main->humidity,
                                'wind_speed'=>$json_decode->wind->speed]);
    }
}
