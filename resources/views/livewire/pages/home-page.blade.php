<div id="page-container">
    <section id="recomended">
        <h2 class="heading">Recomendação para <span class="text-realce">Hoje</span> </h2>
        <x-app.music.musics-container :datas="$recomended" />
    </section>
    <section id="news">
        <h2 class="heading">As músicas mais baixadas na <span class="text-realce">Semana</span> </h2>
        <x-app.music.musics-container :datas="$tops" />
    </section>
    <section id="news">
        <h2 class="heading">Últimos laçamentos da <span class="text-realce">Ghetto Music</span> </h2>
        <x-app.music.musics-container :datas="$news" />
    </section>
</div>
