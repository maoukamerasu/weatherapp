<template>
    <div>
        <table border="0" bgcolor="#008080">
            <tr bgcolor="#808000"><th colspan="2">福岡市<br>{{weather.today}}({{weather.week}})</th></tr>
            <tr><th colspan="2"><img :src="weather.icon"><font size="7" face="Comic Sans MS">{{weather.temp}}</font>℃</th></tr>
            <tr bgcolor="#cccccc"><th>気候</th><th>{{weather.hello}}</th></tr>
            <tr bgcolor="#cccccc"><th>体感温度</th><th>{{weather.feels_like}}℃</th></tr>
            <tr bgcolor="#cccccc"><th>最低気温</th><th>{{weather.min}}℃</th></tr>
            <tr bgcolor="#cccccc"><th>最高気温</th><th>{{weather.max}}℃</th></tr>
            <tr bgcolor="#cccccc"><th>海面気圧</th><th>{{weather.sea_level}}hPa</th></tr>
            <tr bgcolor="#cccccc"><th>湿度</th><th>{{weather.humidity}}%</th></tr>
            <tr bgcolor="#cccccc"><th>風速</th><th>{{weather.wind_speed}}m/s</th></tr>
            <tr bgcolor="#66cdaa"><th colspan="2">天気予報</th></tr>
            <tr bgcolor="#cccccc" v-for="day in weather.days" :key="day.id"><th>{{weather.future.list[day].dt_txt}}</th><th><img :src="weather.future.list[day].weather[0].icon" width="20" height="20">{{weather.future.list[day].main.temp}}℃</th></tr>
            </table>
    </div>
</template>
<script>
export default{
    props:["weather"],
    mounted(){
        console.log(this.weather)
    },
}
</script>