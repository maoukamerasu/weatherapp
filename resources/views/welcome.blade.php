<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>天気予報アプリ</title>
        <table border='0' bgcolor="#e3f0fb">
        <tr bgcolor="#22ddcc"><th colspan="2">福岡市<br>{{$today}}({{$week}})</th></tr>
        <tr><th colspan="2"><img src='https://openweathermap.org/img/wn/02n@2x.png'><font size="7" face="Comic Sans MS">{{$temp}}</font>℃</th></tr>
        <tr bgcolor="#cccccc"><th>気候</th><th>{{$hello}}</th></tr>
        <tr bgcolor="#cccccc"><th>体感温度</th><th>{{$feels_like}}℃</th></tr>
        <tr bgcolor="#cccccc"><th>最低気温</th><th>{{$min}}℃</th></tr>
        <tr bgcolor="#cccccc"><th>最高気温</th><th>{{$max}}℃</th></tr>
        <tr bgcolor="#cccccc"><th>海面気圧</th><th>{{$sea_level}}hPa</th></tr>
        <tr bgcolor="#cccccc"><th>湿度</th><th>{{$humidity}}%</th></tr>
        <tr bgcolor="#cccccc"><th>風速</th><th>{{$wind_speed}}m/s</th></tr>
        </table>
    </body>
</html>
