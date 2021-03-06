<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="its_sass/dist/app.css?v=<?php echo time(); ?>">
    <title>PHP Dischi</title>
</head>
<body>
    
    <div id="myapp">
        <header>
            <img :src=logoPath alt="logo">
            <input type="text" name="artist-select" id="artist-select" placeholder="Filtra per artista" v-model="artist">
            <button @click="callArtist">Filtra</button>
        </header>
        <main>
            <ul id="music-container">
                <li v-for="album in database">
                    <img :src="album.poster" alt="album">
                    <h3>{{album.title}}</h3>
                    <h4>{{album.author}}<br>{{album.year}}</h4>
                </li>
            </ul>
        </main>
    </div>

<script src="js/main.js"></script>
</body>
</html>