リポジトリ:weatherapp</br>
概要:今の福岡市の天気、その先の天気予報を24時間先毎に、5日分を表示させるwebアプリです。</br>
環境:Windows</br>
使用したAPI:OpenWeatherMap</br>
githubのリンク:https://github.com/maoukamerasu/weatherapp</br>
使用方法:コマンドプロンプトを開き、プロジェクトの下で「php artisan serve」を入力して</br>
表示されたURLにアクセスする。</br>
</br></br></br></br></br>
天気予報取得API選定理由</br>
元々DarkSkyを使いたいんですが、DarkSkyはほかの会社に買収されたことで、新規アカウント作成</br>
できないので、OpenWeatherMapを使いました、使う理由は、無料で使いやすいし、風速、気圧等</br>
数多くの情報を取得できるという点です。</br>
自信のある部分</br>
シンプルさです、より分かりやすくさせるために、アイコンを表示する場所の背景を深くしたり、</br>
より一目瞭然にしたいので、とりあいず、いろんな情報を一つの場所に集中したりしました、</br>
改善すべきな部分:</br>
5日先のデータしか取れないし、福岡市範囲で博多区まで絞られないという点もあるので、事前の</br>
APIの選定にもっと力を入れるべき。</br>
