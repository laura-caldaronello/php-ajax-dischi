<!-- non includo database.php perchè faccio chiamata ajax -->

<main>
    <ul id="music-container">
        <li v-for="album in database">
            <img :src="album.poster" alt="album">
            <h3>{{album.title}}</h3>
            <h4>{{album.author}}<br>{{album.year}}</h4>
        </li>
    </ul>
</main>
